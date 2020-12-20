@component('mail::message')
    <div>
        <span style="font-size:18px">Contact Name:</span>
        <span style="font-size:15px">{{ $data['name'] }}</span><br>
        <span style="font-size:18px">Contact Phone:</span>
        <span style="font-size:15px">{{ $data['phone'] }}</span><br>
        <span style="font-size:18px">Contact Sub:</span>
        <span style="font-size:15px">{{ $data['subject'] }}</span><br>
        <span style="font-size:18px">Contact Email:</span>
        <span style="font-size:15px">{{ $data['email'] }}</span><br>
        <span style="font-size:18px">Contact Message:</span>
        <span style="font-size:15px">{{ $data['message'] }}</span><br>
    </div>
@endcomponent
