{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
@include('layouts.navbar')
<main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row">
                    <div class="col-lg-8">
                        <div >
                            <div class="col-12">
                                <div class="video-items-active">
                                    <div class="text-center video-items">
                                       
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="col-lg-12">
                                <div class="section-tittle mb-30">
                                    <h5>More Photos</h5>
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <a class="item fancybox mb-5 mt-5" href="/frontend/assets/img/banner/banner.png" data-fancybox="gallery1">
		  <div class="overlay-content"><img class="img-fluid rounded" src="/frontend/assets/img/banner/banner.png" alt="...">
		  </div>
         <h2 class="text-center text-dark">J. Mueke Photo Album</h2>
         <div class="description">
            <p class="text-center">Click to see more photos.</p>
         </div>
		 <a class="item fancybox" href="/frontend/assets/img/offers/j2.jpg" data-fancybox="gallery1"></a>
		 <a class="item fancybox" href="/frontend/assets/img/offers/j17.jpg" data-fancybox="gallery1"></a>
		 <a class="item fancybox" href="/frontend/assets/img/offers/j28.jpg" data-fancybox="gallery1"></a>
			  <a class="item fancybox" href="/assets/img/5.jpg" data-fancybox="gallery1"></a>
			  <a class="item fancybox" href="/assets/img/6.jpg" data-fancybox="gallery1"></a>
			  <a class="item fancybox" href="/assets/img/spiritual.jpg" data-fancybox="gallery1"></a>
			  <a class="item mt-5 fancybox" href="/assets/img/8.jpg" data-fancybox="gallery1"></a>
      </a>
                            </div>    
                        
                        </div>
                        <div class="lead-your-community" style="height: auto !important;padding-left:0 !important;padding-right:0 !important;margin: 0 !important;">
                            <div class="p-5 most-recent">
                                <div class="text-center most-recent-img">
                                    <h4 class="text-dark">Support This Work</h4>
                                    <p class="text-dark">
                                        Get involved in our fight for change by supporting us.
                                        Together, let’s partner to achieve the goal of a better society, 
                                        and to create a world that we can proudly leave our children with.
                                    </p>
                                    <!-- <a href="#" class="genric-btn info circle arrow">Donate</a> -->
                                    <a href="#" data-toggle="modal" data-target="#donate" style="background-color: #006b36 !important;" class="genric-btn circle arrow">Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        {{-- @include('livewire.frontend.homepage.subscribe') --}}
                        <section class="main-content gray-bg">
                            <div class="most-recent-area">
                                <!-- Section Tittle -->
                                <div class="small-tittle">
                                    <h4>Let's Connect</h4>
                                    @include('livewire.frontend.homepage.social-media.lets-connect')
                                </div>
                                <!-- Details -->
                                @include('livewire.frontend.homepage.social-media.facebook')
                            </div>
                    
                        </section>
                        <section class="main-content gray-bg">
                            <div class="most-recent-area">
                                @include('livewire.frontend.homepage.social-media.twitter')
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
                                    {{-- @include('livewire.frontend.homepage.social-media.instagram') --}}
                                    <div data-mc-src="208345c9-560d-4ec4-99c4-f1131d8ae92f#instagram"></div>
                                    <script 
                                      src="https://cdn2.woxo.tech/a.js#6023b6244d6dfc001535fc0f" 
                                      async data-usrc>
                                    </script>
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