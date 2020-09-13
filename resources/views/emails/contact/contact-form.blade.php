@component('mail::message')

# Thank you for you message.

<strong>Name:</strong> {{ $data['name'] }}<br/> 
<strong>Email:</strong> {{ $data['email'] }}

<strong>Message:</strong>

{{ $data['message'] }} 
@endcomponent
