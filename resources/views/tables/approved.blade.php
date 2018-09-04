@foreach($approved as $value)
    <tr data-check="{{$value->id}}">
        <td scope="row">{{$value->name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->address}}</td>
        <td>{{$value->phone}}</td>
        <td>{{$value->check}}</td>
        <td>{{$value->date}}</td>
        <td>{{$value->number}}</td>
        <td>
            <button class="btn btn-sm btn-primary rounded-0">
                Проверить отправку
            </button>
        </td>
    </tr>
@endforeach