@component('mail::message')
# Email Verification  

<p style="color: #3d4852;">Hello, {{$username}} <br/>
We are from {{ config('app.name') }}. Use this code below to verify your email.</p>  
  
<h1 style="color: #3d4852;">{{$code}}</h1>  
  
<p style="color: #3d4852;">This code is expires at next 15mn.  
If you did not make this request, you can ignore this notification.</p>  

Thanks,  
{{ config('app.name') }}
@endcomponent
