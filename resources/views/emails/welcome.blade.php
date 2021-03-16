@component('mail::message')
 <div class="image rounded mx-auto d-block text-center"><img src="{{url('img/logo-poltek.png')}}" class=""></div><br><br>

Ayo ikut serta!!!!!

<img src="{{url('img/poster-tracer-study1.png')}}" class=" ">

@component('mail::button', ['url' => '/kta']) isi kuesioner
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
