@foreach($participants as $participant)
    <tr data-id="{{$participant->id}}" data-show>
        <td scope="row">{{$participant->name}}</td>
        <td>{{$participant->email}}</td>
        <td>{{$participant->address}}</td>
        <td>{{$participant->phone}}</td>
        <td>{{$participant->check}}</td>
        <td>{{$participant->date}}</td>
    </tr>
@endforeach