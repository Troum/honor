<?php

namespace App\Http\Controllers;

use App\ApprovedParticipant;

use App\Participant;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    	$participants = Participant::all();
    	$approved = ApprovedParticipant::all();
	    if ($request->ajax()) {
		    return view('tables.tabs',['participants' => $participants, 'approved' => $approved])->render();
	    }
        return view('home', compact('participants', 'approved'));
    }

    public function open(Request $request)
    {
    	$participant = Participant::whereId($request->id)->first();
    	return response()->json(['imei' => $participant->imei, 'photo' => $participant->directory.'/'.$participant->photo, 'check' => $participant->check]);
    }

    public function send(Request $request)
    {
	    $participant = Participant::whereId($request->id)->first();

	    ApprovedParticipant::create([
		    'name' => $participant->name,
		    'phone' => $participant->phone,
		    'email' => $participant->email,
		    'address' => $participant->address,
		    'imei' => $participant->imei,
		    'photo' => $participant->photo,
		    'check' => $participant->check,
		    'date' => $participant->date,
	    ]);

	    $approved = DB::table('approved_participants')->latest()->limit(1)->first();

	    if ($approved->id < 10) {
		    DB::table('approved_participants')->whereRaw('id = '.$approved->id.'')->update(['number' => '000'.$approved->id]);
	    }
	    if ($approved->id > 9 && $approved->id <100 ) {
		    DB::table('approved_participants')->whereRaw('id = '.$approved->id.'')->update(['number' => '00'.$approved->id]);
	    }
	    if ($approved->id > 99 && $approved->id < 1000 ) {
		    DB::table('approved_participants')->whereRaw('id = '.$approved->id.'')->update(['number' => '0'.$approved->id]);
	    }
	    if ($approved->id > 999 && $approved->id < 6000 ) {
		    DB::table('approved_participants')->whereRaw('id = '.$approved->id.'')->update(['number' => $approved->id]);
	    }

	    Storage::disk('public')->move('images/'.$participant->directory.'/'.$participant->photo, 'images/approved/'.$approved->directory.'/'.$approved->photo);
	    Storage::disk('public')->deleteDirectory('images/'.$participant->directory);
	    $participant->delete();

	    $approved = DB::table('approved_participants')->latest()->limit(1)->first();

		$message = 'Спасибо! Вы успешно прошли регистрацию. Ваш игровой код — '.$approved->number;
	    $client = new Client();
	    $res = $client->request('GET', 'https://userarea.sms-assistent.by/api/v1/send_sms/plain?user=Prospektpress&password=32QaDi88&recipient='.$participant->phone.'&message='.$message.'&sender=Honor-igra');
	    $body = $res->getBody();
	    $status = json_decode($body);
	    if($status > 0)
	    {
		    DB::table('approved_participants')->whereRaw('id = '.$approved->id.'')->update(['status' => $status]);
		    return response()->json(['success' => 'Сообщение пользователю '.$approved->name.' было успешно отправлено'], Response::HTTP_OK);
	    }
	    else
	    {
	    	return response()->json(['error' => 'Ошибка'], Response::HTTP_OK);
	    }


    }

    public function status(Request $request)
    {
    	$approved = ApprovedParticipant::whereId($request->id)->first();
	    $get = new Client();
	    $res = $get->request('GET', 'https://userarea.sms-assistent.by/api/v1/statuses/plain?user=Prospektpress&password=32QaDi88&id='.$approved->status);
	    $body = (string) $res->getBody();
	    switch ($body)
	    {
		    case 'Queued':
		    	return response()->json(['status' => 'Сообщение в очереди на отправку'], Response::HTTP_OK);
		    case 'Sent':
			    return response()->json(['status' => 'Сообщение отправлено'], Response::HTTP_OK);
		    case 'Delivered':
			    return response()->json(['status' => 'Сообщение доставлено'], Response::HTTP_OK);
		    case 'Expired':
			    return response()->json(['status' => 'Срок жизни сообшения истек'], Response::HTTP_OK);
		    case 'Rejected':
			    return response()->json(['status' => 'Сообщение отклонено'], Response::HTTP_OK);
		    case 'Unknown':
			    return response()->json(['status' => 'Неизвестная ошибка'], Response::HTTP_OK);
		    case 'Failed':
			    return response()->json(['status' => 'Сообщение не доставлено'], Response::HTTP_OK);
	    }

    }
}
