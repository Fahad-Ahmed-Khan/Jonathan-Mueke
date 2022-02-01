 {{-- In work, do what you enjoy. --}}
 <main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row" >
                    <div class="col-lg-8">
                        <h4 class="text-center">Serving the People</h4>
                        <div class="p-2 text-center col-lg-12 col-md-6 col-sm-6">
                            @include('livewire.frontend.homepage.social-media.lets-connect')
                        </div>
                        <div class="p-2" >
                            <div class="row">
                                <div class="col-12">
                                    <!-- Nav Card -->
                                    <div>
                                        <center>
                                            <img src="{{ asset('frontend/assets/img/politicalJourneyImg/j14.jpg')}}" width="561" height="346" alt="" style="object-fit: contain; background-size: 100% 100%;z-index: 0;border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                            <caption>Jmueke, Sewage investigation</caption>
                                        </center>
                                        <p style="font-size: large !important;text-align: justify">
                                            Jonathan Mueke's passion for law and governance was a desire brewed in him from a very young age. To
                                            actualize his dream in helping society and more so working in tandem with them to meet their
                                            needs. In the year 2006, Jonathan set out to vie for a position of leadership as the Members of Parliament
                                            for Westlands’ Nairobi. At a tender age of 29 years, this was no mean feat as he was running against a
                                            seasoned politician who was once the Mayor of Nairobi. His (Jonah's) manifesto was well-structured and
                                            people believed in his campaign so much such that he was able to raise funds from well-wishers and
                                            believers of his drive for a better constituency. The support was overwhelming, He came in third, a
                                            great achievement for a ‘newbie’ in the political spectrum. 
                                        </p>
                                        @include('livewire.frontend.homepage.support-work')
                                        <hr>
                                        
                                        <p  style="font-size: large !important;text-align: justify">
                                            The defeat did not put him down but further prodded him to enrich his startup businesses towards
                                            creating employment opportunities for the youth,one of the biggest passions he continue to have
                                            and hold dear at heart.
                                        </p>
                                           <center>
                                            <img src="{{ asset('frontend/assets/img/youth.jpg')}}" width="561" height="346" alt="" style="border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                            <caption>Jmueke, addressing the youth Agenda</caption> <br>
                                                <a href="#" data-toggle="modal" data-target="#donate" class="info-border genric-btn btn-info small circle" style="color:#006b36;background-color:">Subscribe To updates</a>
                                            </center>
                                           <hr>
                                        
                                        <p  style="font-size:large !important;text-align: justify">
                                            His growth in business development attracted quite an array of ‘top-guns’ in industry, one of
                                            them being the former <strong>Nairobi Governor, Dr. Evans Kidero</strong>. In the year 2011, together with his
                                            team, Kidero requested him (Jonah) to join the campaign team with the objective of making Nairobi
                                            County the ultimate ‘City in the Sun’. Jonah's hard work and devotion towards betterment of the 
                                            people had been recognized and he took up the role to serve the people.
                                        </p>
                                           <hr>
                                        <p style="font-size:large !important;">
                                            <blockquote style="color: #006b36;font-size: x-large !important;">
                                               <strong>
                                                   <i>
                                                    …I guess the Governor saw me as a pretty consistent person... it wasn’t really for
                                                    me to work with him as the Deputy Governor but rather to help him structure his
                                                    campaign and to execute his campaign strategy – for the Nairobi People”.
                                                   </i>
                                               </strong>
                                            </blockquote>
                                        </p>
                                        <hr>
                                        <p  style="font-size:large !important;text-align: justify">
                                            About a year later, Jonah was assigned to run youth agenda. Part of the strategy was
                                            to have a young person as a running mate. The vetting of the ‘perfect’ candidate was quite nervewracking,
                                            but Kidero and his team believed Jonah had seen the vision they presented. Though he had no
                                            interest in running, Governor Kidero requested that since Jonathan had been working on his campaign
                                            since inception, he would prefer that he (Mueke) be his running mate.They went on to win
                                            the election.
                                        </p>
                                    </div>
                                </div>        
                            </div>
                        </div>
                        <livewire:frontend.subscribe.subscription-settings />

                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <section class="main-content gray-bg">
                            <!-- Recent Event -->
                            @include('livewire.frontend.homepage.events.recent-event-top')
                            <!-- Twiter feed. N/B: To be improved and use twitter API -->
                            @include('livewire.frontend.homepage.social-media.twitter')
                            <!-- facebook -->
                            @include('livewire.frontend.homepage.social-media.facebook')
                            <!-- instagram -->
                            @include('livewire.frontend.homepage.social-media.instagram')
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>