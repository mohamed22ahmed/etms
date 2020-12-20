@component('mail::message')
    <div>
        <span style="font-size:18px">this is a code to reset your password </span>
        <span style="font-size:25px">{{ $data['code'] }}</span><br>
    </div>
@endcomponent
