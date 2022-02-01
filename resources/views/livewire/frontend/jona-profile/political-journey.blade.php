{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}

<main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row" >
                    <div class="col-lg-8">
                        <div class="p-2 shadow" style="border-left: 1px solid #006b36 !important;border-right: 1px solid #006b36 !important;border-radius: 20px;" >
                            <h4 class="text-center" style="color: #10245a;">Mueke's Story</h4>
                            @include('livewire.frontend.homepage.social-media.follow-buttons')
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div class="tab-content" id="nav-tabContent">
                                        <!-- card one -->
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                            <div class="row">
                                                @include('livewire.frontend.jona-profile.personal-journey.index-page')
                                                @include('livewire.frontend.jona-profile.serving-the-people.index-page')
                                                @include('livewire.frontend.jona-profile.success-in-the-office.index-page')
                                                @include('livewire.frontend.jona-profile.growth-of-a-city.index-page')
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <livewire:frontend.subscribe.subscription-settings />
                     {{-- =================++++SUPPORT THIS WORK/DONATE --}}
                     @include('livewire.frontend.homepage.support-work')

                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <section class="main-content gray-bg">
                            @include('livewire.frontend.homepage.events.recent-event-top')
                            @include('livewire.frontend.homepage.social-media.facebook')
                            <!-- Twiter feed. N/B: To be improved and use twitter API -->
                            @include('livewire.frontend.homepage.social-media.twitter')
                            @include('livewire.frontend.homepage.social-media.follow-buttons')
                            {{-- <div id="disqus_thread"></div> --}}
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="pt-20 weekly3-news-area pb-30">
        <div class="container-fluid">
            <div class="weekly3-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-wrapper">
                            <!-- Slider -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- instagram -->
                                   @include('livewire.frontend.homepage.social-media.multi-instagram')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    <!-- End Weekly-News -->
</main>