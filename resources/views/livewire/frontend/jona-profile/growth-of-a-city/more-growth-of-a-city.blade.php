{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
<main id="main">
    <div class="home-header fix pt-25 gray-bg">
        <div class="container-fluid">
            <div class="main-header">
                <div class="row" >
                    <div class="col-lg-8">
                        <h2 class="text-center">Growth of a City</h2>
                        <div class="p-2 text-center col-lg-12 col-md-6 col-sm-6">
                            @include('livewire.frontend.homepage.social-media.lets-connect')
                        </div>
                        <div class="p-2" >
                            <div class="row">
                                <div class="col-12">
                                    <center>
                                        <img src="{{ asset('frontend/assets/img/politicalJourneyImg/nai.jpg')}}" width="561" height="346" alt="" style="border-radius: 10px;" class="border shadow img-responsive img-fluid"> <br>
                                        <caption>Nairobi City, Kenya</caption>
                                    </center>
                                    <p>
                                        When Mueke tool over the role of leadership in Nairobi County (Deputy Governor),Nairobi's image was at its worst.The report written by the magazine Smart Planet, and based on particular
                                        criteria, saw Nairobi declared as the second worst place to live in. In due course however, and
                                        during their tenure, Nairobi started receiving favorable standings. 
                                    </p>
                                    <p>
                                        In a span of five years, there were dramatic changes and by the time they were
                                        leaving the office in 2017, Nairobi was ranked position 87 as opposed to 126 when they were elected in 2013. This had been the first time in the history of Kenya that
                                        Nairobi had been in the double digits in the business index. This can be attributed to digitization and
                                        creation of an enabling environment for people to do business. 
                                    </p>
                                    <p>
                                        During their term, Nairobi also got favorable ranking in various aspects, some of which are as
                                        listed below:
                                    </p>
                                    <!-- Nav Card -->
                                    <ol class="shadow list-group">
                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2014, Lamudi, a global property giant, with a presence in 11 African countries as well
                                            as in Mexico, Latin America, Asia and the Middle East, ranked Nairobi as the third
                                            livable city to live in amongst the listed 11 African countries. 
                                        </li>
                                        <blockquote class="p-5">
                                            <i>
                                                <strong>
                                                   <center>
                                                        “It is a kind and gentle city where many multinational companies have set foot into
                                                        for their African operations”<br>
                                                        Lamudi.
                                                   </center>
                                                </strong>
                                            </i>
                                        </blockquote>
                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2015, Nairobi grabbed the top slot in Foreign Direct Investments (FDI) in Africa.
                                            Nairobi attracted the most FDI on the continent at city level in 2015, beating
                                            Johannesburg, which had held this accolade since 2010. Foreign Direct Investment flows
                                            into Kenya increased 37 per cent in 2015 compared to 2014.
                                        </li>
                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2015, Nairobi was the only African city to appear in a shortlist of 21 hubs throughout
                                            the world a ranking done by the Intelligent Community Forum. 
                                        </li>

                                        <blockquote class="p-5">
                                            <strong>
                                                <i>
                                                    <center>
                                                        “…we saw a strong foundation being put into place in Nairobi with a sensible,
                                                        pro-growth government policy a more diversified economy, and an innovation
                                                        ecosystem of startups, international companies and universities”.
                                                        The forum’s co-founder, <br> Robert Bell
                                                    </center>
                                                </i>
                                            </strong>
                                        </blockquote>
                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2017, Nairobi was rated number ten in the globe by the JLL 2017 City Momentum
                                            Index (CMI), beating other big cities such as Dubai (United Arab Emirates), New York
                                            (US). The index ranks cities based on innovation and technology and Nairobi was cited
                                            as having well established support structures and with a highly conducive environment to
                                            nurture technological changes.
                                        </li>
                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2017, Nairobi was ranked third among top ten cities to visit by travel guidebook and
                                            reference publisher, Rough Guides. Nairobi was the only African city in this list.
                                            described  
                                        </li>

                                            <blockquote class="p-5">
                                                <strong>
                                                    <i>
                                                        <center>
                                                            “A dynamic urban landscape with cool restaurants, groundbreaking art projects
                                                            and a burgeoning fashion scene.”
                                                            <br> Rough Guides
                                                        </center>
                                                    </i>
                                                </strong>
                                            </blockquote>

                                        <li class="list-group-item" style="border: none;"> <i class="fa fa-angle-double-right"></i>
                                            In 2017, according to a new report released by Infomineo, a global business research
                                            company specializing in Africa and the Middle East Nairobi was among leading global
                                            destinations on the Fortune 500 list. It cited Nairobi city as the leading destination for
                                            FMCG companies and was the top choice for organizations looking to service Eastern
                                            Africa.
                                        </li>

                                       
                                    </ol>
                                </div>  
                                
                            </div>
                        </div>
                        <!-- Instagram Multi pics -->
                        @include('livewire.frontend.homepage.social-media.multi-instagram')            

                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                        <section class="main-content gray-bg">
                             <!-- Twiter feed. N/B: To be improved and use twitter API -->
                             @include('livewire.frontend.homepage.social-media.twitter')
                             <!-- facebook -->
                             @include('livewire.frontend.homepage.social-media.facebook')            
                            @include('livewire.frontend.homepage.support-work')
                            <livewire:frontend.subscribe.subscription-settings />
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>