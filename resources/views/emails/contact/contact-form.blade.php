@component('mail::message')
<strong class="text-center text-transform-bold">From my personal website</strong>
<br>
<strong>Name</strong>
{{ $data['name'] }}
<br>
<strong>Email</strong>
{{ $data['email'] }}

<strong>Message</strong>

{{ $data['message'] }}
@endcomponent