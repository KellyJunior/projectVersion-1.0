@component('mail::message')
# Introduction

Your Employee Account is Created Successfully By The Admin Of The Enterprise

Enjoy Your Time With Us At AfroTechnologies

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
