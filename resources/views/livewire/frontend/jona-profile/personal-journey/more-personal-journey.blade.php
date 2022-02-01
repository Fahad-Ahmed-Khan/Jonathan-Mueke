{{-- If your happiness depends on money, you will never be happy with yourself. --}}
<main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row" >
                    <div class="col-lg-8">
                        <h2 class="text-center">Jonathan's Personal Journey</h2>
                        <div class="p-2 text-center col-lg-12 col-md-6 col-sm-6">
                            @include('livewire.frontend.homepage.social-media.lets-connect')
                        </div>
                        <div class="p-2" style="border-left: 1px solid #14942b !important;border-right: 1px solid #14942b !important;border-radius: 20px;" >
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div>
                                        <center>
                                            <img src="{{ asset('frontend/assets/img/offers/j21.jpg')}}" width="561" height="346" alt="" style="border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                            <caption>JMueke, Caption information here</caption>
                                        </center>
                                        <p  style="font-size: large !important;">
                                            Jonathan believed that technology was and will always remain as to where his heart is. In his early childhood days, 
                                            He was convinced that technology could be used to solve problems and more so global ones.
                                            As soon as he completed primary and secondary education, he pursued a professional 
                                            course in the field of Computer Science.
                                        </p>
                                        <p  style="font-size: large !important;">
                                            Jonah,s zeal to deliver at whatever challenge was presented saw him work through his higher
                                            education at different managerial levels within the technology divisions of various 
                                            corporate firms. Through these companies He went up the ranks and gained immense skills 
                                            on business operations, which prompted him to pursue further studies - <strong><a style="color: #14942b !important;" href="#">MBA in Global 
                                                Technology</a></strong>. This saw him appreciate how technology solves people’s problems in everyday life.
                                        </p>
                                        
                                        <p  style="font-size:large !important;">
                                            On his return to Kenya in 2006, after completing studies and having gained enormous skills
                                            on entrepreneurial and business management, he infused in a variety of startups
                                            ranging from Documents Management business to Real Estate and Development. These
                                            companies run and are still running very well.
                                        </p>
                                        <p  style="font-size: x-large !important;">
                                            <blockquote style="color: #14942b;font-size: x-large !important;">
                                            <strong>
                                                <i>
                                                    “…always respect everybody’s opinion because sometimes you will get into
                                                    conflicts where you will have a difference in opinions but you don’t just dismiss
                                                    people. You listen to them, you understand where they are coming from and even if
                                                    you agree to disagree, you simply respect their opinion”.
                                                </i>
                                            </strong>
                                            </blockquote>
                                        </p>
                                        <center>
                                            <img src="{{ asset('frontend/assets/img/women.jpeg')}}" width="561" height="346" alt="" style="border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                            <caption>JMueke, Caption information here</caption>
                                        </center>
                                        <p  style="font-size: large !important;">
                                            Teamwork has always been the greatest lesson he learnt in his career. According to Jonah, he learnt how to work with people,
                                            from good communication to engaging everyone within the team as well as respecting the roles
                                            and opinions each one plays to the success of the ‘journey’.
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