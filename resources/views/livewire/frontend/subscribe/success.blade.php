
<div id="modal" class="alert alert-success" role="alert">
    <h6 class="alert-heading">Thank you for your Subscription!🤗</h6>
    <p>{{ session('subscription_message') }}<i class="fa fa-check"></i></p>
    <p class="mb-0">Kind Regards,<br>
        {!! 'Jonathan Mueke Team' !!}
    </p>
</div>
<script>
var timeout = 3000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);</script>
  <!--<script type="text/javascript">
    setTimout(function() {  $('.form-hide').hide(); },3000)
  </script>--
  
<script type="text/javascript">  
$(document).ready(function(){
    window.livewire.on('alert_remove',()=>{
         setTimeout(function(){ $("#toastrMsg").fadeOut('fast');
         }, 5000); // 5 secs
});
</script>-->