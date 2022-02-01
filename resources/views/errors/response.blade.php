@if (session()->has('message'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>NOTICE!</strong> {{ session('message') }} <i class="fa fa-check"></i>
        {{-- <img src="{{ URL::to('frontend/assets/img/check-mark.gif')}}" width="50" height="auto" alt="check"> --}}
    </div>
@endif