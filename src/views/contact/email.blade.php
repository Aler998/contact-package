@component('mail::message')
# Introduction

Sender: {{ $name }}
<br>
Message:
<br>
{{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
