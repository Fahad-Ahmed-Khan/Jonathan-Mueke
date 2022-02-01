<header>
    <!-- Header Start --
    <div class="header-area">
        <div class="main-header ">
            <!-- image and donate button --
            <div class="header-mid gray-bg">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                        <!-- Logo --
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <span style="font-size:20px;
                                    cursor:pointer;color:#006b36;"
                                onclick="openNav()">&#9776; </span>
                            <div id="mySidenav" class="sidenav" >
                                <div class="logo">
                                    <a href="{{url('/')}}"><img width="100%" height="auto" src="{{ asset('frontend/assets/img/logo/jonaLogo.png')}}" alt="logo"></a>
                                </div>
                                <a style="color: #fff !important;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a class="{{'/' == request()->path() ? 'active' : ''}}" href="{{url('/')}}"><i class="fa fa-angle-double-right"></i> Home</a>
                                        <a  class="" href="#"><i class="fa fa-angle-double-right"></i> Agenda</a>
                                        <a  class="{{'jonathan-mueke-profile' == request()->path() ? 'active' : ''}}" href="{{ url('/jonathan-mueke-profile')}}"><i class="fa fa-angle-double-right"></i> Profile</a>
                                        <a  class="{{'muekes-story' == request()->path() ? 'active' : ''}}" href="{{ url('/muekes-story')}}"><i class="fa fa-angle-double-right"></i> Mueke's Story</a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a class="{{'donate' == request()->path() ? 'active' : ''}}" data-toggle="modal" data-target="#donate" href="#"><i class="fa fa-angle-double-right"></i> Donate</a>        
                                        <a  class="{{'volunteer' == request()->path() ? 'active' : ''}}" data-toggle="modal" data-target="#volunteer" href="#"> <i class="fa fa-angle-double-right"></i> Volunteer</a>
                                        <a class="{{'media/gallery' == request()->path() ? 'active' : ''}}" href="{{ url('/media/gallery') }}"> <i class="fa fa-angle-double-right"></i> Media</a>
                                    </div>
                                    <div class="col-lg-10 offset-lg-1">
                                        <a  class="{{'engage' == request()->path() ? 'active' : ''}}" data-toggle="modal" data-target="#engage" href="#"> <i class="fa fa-angle-double-right"></i>Request a Shout-out🖐️</a>
                                    </div>
                                </div>
                                
                                <div class="p-2 text-center col-lg-12 col-md-6 col-sm-6">
                                    <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fwww.facebook.com%2Fgroups%2F320685569223102&layout=button_count&size=small&width=77&height=20&appId" width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe> 
                                    <a href="https://twitter.com/jmueke?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @jmueke</a>  
                                    <div class="fb-like" data-href="https://www.facebook.com/HonJonathanMueke" data-width="70" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>  
                                    <div class="g-ytsubscribe" data-channel="jmueke" data-layout="default" data-count="default"></div>      
                                </div> 
                                <hr style="margin:0 20px">
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <a href="#" class="text-white">Terms & Condition</a>
                                        <a href="#" class="text-white">Privacy & Policy</a>
                                        <a href="#" data-toggle="modal" data-target="#engage" class="text-white">Contact Us</a>                             
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End --
</header>