@component('mail::message')
# Introduction

<strong>This email body has not been configured yet.</strong>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
