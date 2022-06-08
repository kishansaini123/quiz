@component('mail::message')
# Contact Form Inqury

@component('mail::text')
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
