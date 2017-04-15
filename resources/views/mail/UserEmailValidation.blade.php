@component('mail::message')
#Welcome to Skater.Space, Please Verify You Email Address.
Hello {{$name}}

 We're glad you could join us on Skater.Space! However, we need you to click the button below to verify your email address. If you do not verify your email address, we will not be able to allow you to use many of our wonderful functions.

@component('mail::button',['url'=>$tokenRoute])
Click to Verify Email
@endcomponent

If the above button doesn't work, please copy the following link into your browser:

{{$tokenRoute}}

Thanks, <br>

{{config('app.name')}} Development Team
@endcomponent