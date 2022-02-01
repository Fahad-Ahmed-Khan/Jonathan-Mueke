{{-- The whole world belongs to you --}}

<main id="main">
    <div class="p-0 home-header fix gray-bg">
        <div class="container-fluid">
            <div class="main-header">
               
                @include('livewire.frontend.homepage.banner')
                <div class="row">
                    <div class="col-lg-8 ">
                        <div class="slider-active">
                           <!-- @include('livewire.frontend.homepage.slides.slides')-->
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="main-content gray-bg">
                                        <!-- Recent events -->
                                        {{-- @include('livewire.frontend.homepage.events.recent-event-top') --}}
                                        <div class="">@include('livewire.frontend.homepage.social-media.facebook')</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12">
                                <div class="p-2 text-center most-recent-img" style="border-bottom: 1px dotted #14942b;border-radius:20%">
                                    <h5 class="text-dark">Join Us</h5>
                                    <p class="text-dark">
                                        Help build a better community, and be among the first to know about major news and updates.
                                    </p>
                                    <a href="#" 
                                        data-toggle="modal"
                                        data-target="#subscribe"
                                        style="background-color: #006b36 !important;border-radius: 5px;color:#fff;" class="genric-btn small"><i class="fa fa-bell"></i> 
                                        Subscribe
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- NEW SECTION STARTS-->
    <section class="main-content gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="our-mission-wrapper">
                        <!-- Profile Information -->
                        <div class="mb-0 row justify-content-between align-items-end">
                        @include('livewire.frontend.homepage.profile.index')
                        </div>
                    </div>
                    <div class="our-mission-wrapper">
    <!-- ====================================*** Key agendas****============================= -->
                        <div class="mb-0 bg-white row justify-content-between align-items-end ">
                            <div class="row">
                                <div class=" col-lg-12">
                                    <h4 class="mb-3 text-center">Our Agenda</h4> 
                                    <hr style="border-bottom:2px solid #1f3c6b;margin:0 40%;">
                                </div>
                               
                                @forelse ($fetchAllInArray['agenda'] as $agenda)
                                    @include('livewire.frontend.homepage.agendas.show-agenda')
                                @empty
                                    @include('livewire.frontend.homepage.agendas.water')
                                    @include('livewire.frontend.homepage.agendas.youth')
                                    @include('livewire.frontend.homepage.agendas.hunger')
                                    @include('livewire.frontend.homepage.agendas.healthcare')
                                    @include('livewire.frontend.homepage.agendas.infrastructure')
                                @endforelse
                            </div>
                        </div>
                    </div>
    <!-- ================================***END Key agendas****============================= -->
    <!--========================= Kamba Quote STARTS ================================ -->
                    @include('livewire.frontend.homepage.kamba-quote')
                    <!-- Livewire component for Subscription settings  -->
                    {{-- <livewire:frontend.subscribe.subscription-settings /> --}}
                      <!-- ===========Get Ilvolved ===== -->
                @include('livewire.frontend.homepage.profile.get-involve')
                </div>
    <!--========================= Kamba Quote ENDS ================================ -->           
                
    <!-- ===========================***SOCIAL MEDIA***=============================-->
                <div class="col-lg-4">
                    <!-- facebook -->
                    
                    <!-- Twiter feed. N/B: To be improved and use twitter API -->
                    <div class="mt-5">@include('livewire.frontend.homepage.social-media.twitter')</div>
                    <div class="mt-5">@include('livewire.frontend.homepage.social-media.follow-buttons')</div>
                    <!-- instagram -->
                   <div class="mt-5"> @include('livewire.frontend.homepage.social-media.instagram')</div>
                   <div class="mt-5"> @include('livewire.frontend.homepage.support-work')</div>
                </div>
    <!-- ====================================***END SOCIAL MEDIA****=============================-->
            </div>
        </div>
    </section>
    
<!--========================= BOTTOM NEWS SLIDER STARTS ================================ -->
{{-- 
    <div class="weekly3-news-area pt-80 pb-130">
        <div class="container-fluid">
            <div class="weekly3-wrapper">
                @include('livewire.frontend.homepage.news.bottom-sliders')
            </div>
        </div>
    </div>            --}}
    <!-- =========================End Bottom-News =========================== -->
</main>
