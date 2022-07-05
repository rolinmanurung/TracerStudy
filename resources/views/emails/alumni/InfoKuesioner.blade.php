@component('mail::message')
# Introduction

Ayo isi Tracer Study Terbaru

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
