@component('mail::message')
Hello {{ $name }},

My Baby's In.

# Love You Tweety!!

@component('mail::button', ['url' => config('app.url') . 'home'])
Welcome Aboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
