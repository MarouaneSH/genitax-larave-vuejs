@component('mail::message')
# Vous avez un nouveau message de Genitax.ma

@component('mail::table')
|               |          |   
| ------------- |:-------------:|
| Nom Complet         | {{ $data['name'] }}|      
| E-mail           | {{ $data['email'] }}|      
| Sujet           | {{ $data['subject'] }}|      
| Message           | {{ $data['message'] }}|      

@endcomponent

Merci,<br>
Genitax.ma
@endcomponent
