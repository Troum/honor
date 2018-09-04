@component('mail::message')
    @component('mail::panel')
    <div style="width: 100%; margin-left: 33.33%; padding: 30px">
        <table>
            <tbody style="width: 100%">
            <tr>
                <td width="25%" style="color: #000; padding: 5px">Имя: </td>
                <td width="75%" style="color: #000; padding: 5px">{{$name}}</td>
            </tr>
            <tr>
                <td width="25%" style="color: #000; padding: 5px">Контакт: </td>
                <td width="75%" style="color: #000; padding: 5px">{{$contacts}}</td>
            </tr>
            <tr>
                <td width="25%" style="color: #000; padding: 5px">Вопрос: </td>
                <td width="75%" style="color: #000; padding: 5px">
                    {{$content}}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    @endcomponent
{{ config('app.name') }}
@endcomponent
