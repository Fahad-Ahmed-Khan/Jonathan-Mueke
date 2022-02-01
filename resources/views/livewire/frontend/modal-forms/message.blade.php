<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            <strong class="text-success">{{ session('message') }}</strong>
        </div>
    @endif
</div>

<script>
    var timeout = 3000; // in miliseconds (3*1000)
$('.alert').delay(timeout).fadeOut(300);</script>
</script>