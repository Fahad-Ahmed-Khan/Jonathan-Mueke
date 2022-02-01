<center>
    <img src="{{URL::to('backend/assets/images/email3.gif')}}" width="100" height="auto" class="rounded-circle" height="auto" alt="">
</center>
<div class="alert alert-success" role="alert">
    <h6 class="alert-heading">Thank you for Requesting A Greeting!</h6>
    <p>Aww yeah, {{ session('sender_request') }}<i class="fa fa-check"></i></p>
    
    <hr>
    <p class="mb-0">Thanks,<br>
        {!! 'Jonthan Mueke Office' !!}
    </p>
  </div>
  
 <script>
     var timeout = 3000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);</script>
 </script>