<?php

namespace App\Http\Controllers;

use App\Http\Requests\MailRequest;
use App\Http\Requests\RegistrationRequest;
use App\Imei;
use App\Mail\QuestionMail;
use App\Participant;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use ElForastero\Transliterate\TransliterationFacade;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Jenssegers\Agent\Agent;

class IndexController extends Controller
{
	public function dash($string)
	{
		return str_replace(' ','_', TransliterationFacade::make($string));
	}

	public function index()
	{
		$agent = new Agent();
		$browser = $agent->browser();
		if($browser === 'IE'){
			return view('ie');
		}
		else
		{
			if($agent->isDesktop())
			{
				return view('index');
			}
			else{
				return view('mobile');
			}
		}


	}

	public function register(RegistrationRequest $request)
	{
		$participant = Participant::whereImei($request->imei)->first();
		if(isset($participant))
		{
			File::delete(public_path().'images/'.$participant->directory.'/'.$participant->photo);

			$participant->check = $request->check;
			$participant->photo = $this->dash($request->file('photo')->getClientOriginalName());
			$participant->date = $request->date;
			$participant->save();
			$request->file('photo')->move('images/'.$participant->directory, $this->dash($request->file('photo')->getClientOriginalName()));

			return response()->json(['success' => 'Вы успешно изменили свои данные!'], Response::HTTP_OK);


		}
		else
		{
			$imei = DB::table('imeis')
			          ->whereRaw('imei_one ="'.$request->imei.'" or imei_two = "'.$request->imei.'"')
			          ->first();

			if(isset($imei))
			{
				if($imei->status !== 'inactive') {

					if ( $imei->imei_one === $request->imei ) {
						$receivedImei = $imei->imei_one;
					}
					if ( $imei->imei_two === $request->imei ) {
						$receivedImei = $imei->imei_two;
					}

					$photo = $request->file('photo');

					Participant::create([
						'name' => $request->name,
						'phone' => $request->phone,
						'email' => $request->email,
						'address' => $request->address,
						'check' => $request->check,
						'imei' => $receivedImei,
						'photo' => $this->dash($request->file('photo')->getClientOriginalName()),
						'date' => $request->date
					]);

					$participant = DB::table('participants')->latest()->limit(1)->first();
					$photo->move('images/'.$participant->directory, $participant->photo);

					DB::table('imeis')->whereRaw('imei_one ="'.$participant->imei.'" or imei_two = "'.$participant->imei.'"')->update(['status' => 'inactive']);

					return response()->json(['success' => 'Вы успешно зарегистрировались! После проверки модератором, Вам будет отправлено sms с вашим номером участника'], Response::HTTP_OK);

				}
				else
				{
					return response()->json(['inactive' => 'Введенный Вами IMEI уже участвует в розыгрыше'], Response::HTTP_OK);
				}
			}
			else
			{
				return response()->json(['error' => 'Введенный Вами IMEI не может участвовать в розыгрыше'], Response::HTTP_OK);
			}
		}



	}

	public function question(MailRequest $request)
	{
		Mail::to('info@fcb.by')->cc('kutuzova@fcb.by')->bcc('tishchenko@fcb.by')->send(new QuestionMail($request->name, $request->contact, $request->message));
		return response()->json(['success' => 'Ваш вопрос был успешно отправлен! Вам ответят в ближайшее время!'], Response::HTTP_OK);
	}


}
