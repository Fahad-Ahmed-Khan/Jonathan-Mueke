{{-- Do your work, then step back. --}}
<main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row" >
                    <div class="col-lg-8">
                        <h2 class="text-center"> {{ $event->event_title }}</h2> <hr>
                        <div class="p-2 text-center col-lg-12 col-md-6 col-sm-6">
                            @include('livewire.frontend.homepage.social-media.lets-connect')
                        </div>
                        <div class="p-2" style="border-left: 1px solid #006b36 !important;border-right: 1px solid #006b36 !important;border-radius: 20px;" >
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div>
                                        <center>
                                            <img src="{{ asset('storage/'.$event->cover_image) }}" width="561" height="346" alt="" style="border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                        </center>
                                        <p  style="font-size: large !important;">
                                           {{ $event->description }}
                                        </p>
                                    </div>
                                </div>        
                            </div>
                        </div>
                       
                        <!-- SUBSCIPTION FORM-->
                        <livewire:frontend.subscribe.subscription-settings />
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <section class="main-content gray-bg">
                            <!-- Twiter feed. N/B: To be improved and use twitter API -->
                            @include('livewire.frontend.homepage.social-media.twitter')
                            <!-- facebook -->
                            @include('livewire.frontend.homepage.social-media.facebook')
                            <!-- instagram -->
                            @include('livewire.frontend.homepage.social-media.instagram')
                        </section>
                         {{-- =================++++SUPPORT THIS WORK/DONATE --}}
                         @include('livewire.frontend.homepage.support-work')
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <!-- End Weekly-News -->
</main>