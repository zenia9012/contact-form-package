@component('mail::message')
# Introduction

You have a message from : {{ $name }}
<br>
Message: {{ $message }}

{{ config('app.name') }}
@endcomponent
