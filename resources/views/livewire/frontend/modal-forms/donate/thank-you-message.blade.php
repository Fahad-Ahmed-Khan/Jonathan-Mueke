{{-- <center>
    <img src="{{URL::to('backend/assets/images/payment.gif')}}" width="100" height="auto" class="rounded-circle" height="auto" alt="">
</center> --}}
<div class="alert alert-success" role="alert">
    <h6 class="alert-heading">Thank you for your Donation!</h6>
    <p>{{ session('donation_message') }}<i class="fa fa-check"></i></p>
    <hr>
    <p class="mb-0">Kind Regards,<br>
        {!! 'Jonthan Mueke Team' !!}
    </p>
  </div>