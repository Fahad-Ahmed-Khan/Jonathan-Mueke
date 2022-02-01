<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
	<link rel="stylesheet" href="/css/main.css">
	
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
    @include('layouts.navbar')
	@include('livewire.frontend.modal-forms.donate.donations')
	<!--@include('livewire.frontend.modal-forms.donate.thank-you-message')-->
	@include('livewire.frontend.modal-forms.engage')

<div class="banner-container" id="section-1">
	<div class="banner">
		<div class="bg-banner">
			<p class="text-white" style="position:relative;top:100px;width:378px;font-weight:900;font-size:54px;">Jonathan Mueke</p>
			<p class="text-white ms-5" style="position:relative;top:100px;width:261px;font-weight:800;font-size:24px;">For Governor 2022</p>
			<p class="text-white" style="position:relative;top:100px;width:378px;font-family:'Dancing Script',cursive;font-weight:700;font-size:48px;">Kitui County</p>
		</div>
		<div class="content">
			<p class="">"Together We Will <br> Make Our Country<br>Better For Everyone"</p>
			<button class="btn-donate-main bg-white text-center text-success btn btn-outline-success" type="submit" data-bs-toggle="modal" data-bs-target="#donate"><a href="#" class="text-decoration-none text-success" data-bs-toggle="modal" data-bs-target="#donate">Donate</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
			<button class="btn-engage text-center text-white ms-5" type="submit" data-bs-toggle="modal" data-bs-target="#engage"><a href="#" class="text-decoration-none text-white" data-bs-toggle="modal" data-bs-target="#engage">Engage</a> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
		</div>
		<div class="mueke">
			<div class="socials">
				<img src="images/socials-bg.png" class="img-fluid float-lg-end" style="height:17%;width:60%;margin-top:110%;">
				<a href="https://www.facebook.com/HonJonathanMueke/"><img src="images/Facebook.png" class="img-fluid float-end" style="margin-top:115%;transform:translateX(250px);"></a>
				<a href="https://www.youtube.com/user/jmueke"><img src="images/Youtube.png" class="img-fluid float-end" style="margin-top:115%;transform:translateX(230px);"></a>
				<a href="https://twitter.com/jmueke"><img src="images/twitter.png" class="img-fluid float-end" style="margin-top:117%;transform:translateX(200px);"></a>
			</div>
		</div>
	</div>
</div>
	
	<!--Why Mueke-->
<section class="text-center mt-5 mb-5 mx-auto">
	<div class="container mt-5">
	@foreach($AboutUs as $about_us)
		<h2 class="fw-bolder display-5 mt-5 text-start">{{$about_us->header}}</h2>
			<div class="divider py-1 bg-warning mb-1 w-10"></div>
		<div class="row g-3 mt-0">
			<div class="col-lg">
				<img src="images/mueke-agenda.png" class="img-fluid shadow-lg" style="">
				<p class="mt-3 text-success fw-bold fs-5 text-lg-start">{{$about_us->title}}</p>
				<p class="fs-6 text-lg-start"> {{$about_us->description}}</p>
				<p class="text-success fw-bold text-lg-start"><a href="#" class="text-success text-decoration-none">{{$about_us->button}}</a></p>
				<img src="images/hr-2.png" class="img-fluid float-start my-2">
			</div>
			@endforeach
			<div class="col-lg">
				<img src="images/mueke-story.png" class="img-fluid shadow-lg">
				<p class="mt-3 text-success fw-bold fs-5 text-lg-start">My Story</p>
				<p class="fs-6 text-lg-start">I was born and raised in Kitui, and have experienced the challenges first hand.</p>
				<p class="text-success fw-bold text-lg-start"><a href="#" class="text-success text-decoration-none">Read More</a></p>
			</div>
			<div class="col-lg">
				<img src="images/mueke-record.png" class="img-fluid shadow-lg">
				<p class="mt-3 text-success fw-bold fs-5 text-lg-start">My Track Record</p>
				<p class="fs-6 text-lg-start">I have big dreams for our county, and I believe they will come true under</p>
				<p class="text-success fw-bold text-lg-start"><a href="#" class="text-success text-decoration-none">Read More</a></p>
			</div>
			<div class="col-lg">
				<img src="images/success-2.png" class="img-fluid shadow-lg">
				<p class="mt-3 text-success fw-bold fs-5 text-lg-start">Success In the Office</p>
				<p class="fs-6 text-lg-start">I have big dreams for our county, and I believe they will come true under</p>
				<p class="text-success fw-bold text-lg-start"><a href="/success-in-the-office" class="text-success text-decoration-none">Read More</a></p>
			</div>
		</div>
	</div>
</section>
		<!--Why Mueke-->
		
		<!--Who is Mueke-->
<section class="bg-image-4 text-center text-sm-start">
	<div class="container">
	@foreach($SocialMedia as $social_media)
		<div class="row">
			<div class="col-md-6 col-sm-12">
					<h2 class="heading text-white text-start mt-5 fw-bolder fs-1">{{$social_media->header}}</h2>
					<div class="divider py-1 bg-warning mb-5 w-10"></div>
					<p class="text-white text-start mt-4" style="height:163px">{{$social_media->description}}</p>
					<p class="text-warning fw-bold mt-5" id="agenda"><a href="#" class="text-decoration-none text-warning">{{$social_media->learn}}</a></p>
			</div>
			<div class="col-md-6 col-sm-12" >
				<img src="images/jmueke.png" class="img-fluid float-lg-end" style="width:400px;height:400px;">
			</div>
		</div>
		@endforeach
	</div>
</section>
		<!--Who is Mueke-->

<!--My Agenda-->
<section class="text-center text-md-start mt-5" >
	<div class="container">
		@foreach($Agenda as $agendas)
		<h2 class="fw-bold text-start mb-3" id="agenda">{{$agendas->header}}</h2>
			<div class="divider py-1 bg-warning mb-5 w-10"></div>
		<div class="row g-lg-5 g-md-3 g-sm-2">
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/water.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">{{$agendas->agenda_title}}</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">J.Mueke is committed to bringing change,Water issues will be resolved under his tenure.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Water shortage in Kitui has been a huge challenge for the people of Kitui County. 
What I witnessed this morning in Mwingi North was heartbreaking.</p>
				</div>
				@endforeach
				<div class="col-lg-4 col-md-4 mt-5">
					<img src="images/case.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="agenda/unemployment" class="text-decoration-none text-dark">Unemployment</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone. Our economy is struggling, unemployment is at its highest and corruption is getting worse.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Even in the middle of this pandemic, people have stolen money set aside to save our lives.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5">
					<img src="images/hunger.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="agenda/hunger" class="text-decoration-none text-dark">Hunger</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">With millions of Kenyans going without food, fighting Covid-19 and focusing on ecomonic recovery
should be our priority as a country.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/healthcares.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="agenda/healthcare" class="text-decoration-none text-dark">Healthcare</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.Healthcare for all will be a priority once elected as Governor of Kitui</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Kitui County has over 90 closed, non operational and un-equipped health facilities.
Our 2021/2022 budget is KSH 12.5 billion.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/bridges.png" class="img-fluid rounded-circle mt-1" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="agenda/infrastructure" class="text-decoration-none text-dark">Infrastructure</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Unveiling of the Master Plan, a new transit system for Nairobi & environs and construction of roads.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/bridges.png" class="img-fluid rounded-circle mt-1" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="agenda/statistical-data" class="text-decoration-none text-dark">Statistical data</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Unveiling of the Master Plan, a new transit system for Nairobi & environs and construction of roads.</p>
				</div>
		</div>
	</div>
</section>
<!--My Agenda-->

<!--Stats-->
<section class="bg-light text-center mb-5 mx-auto">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
			<div class="col-lg mt-5">
					<p class="text-warning" style="font-weight:800;font-size:64px;">500+</p>
					<p class="" style="color:#666;font-size:14px;">Children Supported</p>
				</div>
				<div class="col-lg mt-5">
					<p class="text-warning" style="font-weight:800;font-size:64px;">10+</p>
					<p class="text-center" style="color:#666;font-weight:400;font-size:14px;">Years in Public Service</p>
				</div>
				<div class="col-lg mt-5">
					<p class="text-warning" style="font-weight:800;font-size:64px;">1000+</p>
					<p class="text-center" style="color:#666;font-size:14px;">Women Empowered</p>
				</div>
				<div class="col-lg mt-5">
					<p class="text-warning" style="font-weight:800;font-size:64px;">8</p>
					<p class="" style="color:#666;font-size:14px;">Constituencies Covered</p>
				</div>
		</div>
		</div>
	</div>
</section>
<!--Stats-->

<!--Grassroots campaign-->

<section class="float-center text-center mx-auto" id="sermons">
      <div class="container ">
      <h2 class="mb-1 fw-bold mt-5 text-lg-start">Grassroots Campaign</h2>
			<div class="divider py-1 bg-warning mb-5 w-10"></div>
        <div class="row g-0">
          <div class="col-lg-3 mb-0 mb-lg-0">
			<a class="primary-overlay d-block mb-0 fancybox g-0" href="images/mueke-g1.png" data-fancybox="gallery1" style="height:373px;">
              <div class="overlay-content"><img class="img-fluid g-0" src="images/mueke-g1.png" alt="..." style="height:373px;"></div>
			</a>
          </div>
		  
		  <div class="col-lg-3 mb-0 mb-lg-0">
			  <a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g2.png" data-fancybox="gallery1" style="">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g2.png" alt="..." style=""></div>
			  <a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g3.png" data-fancybox="gallery1" style="height:187px;">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g3.png" alt="..." style="height:187px;"></div>
			</a>
          </div>
		  
		  <div class="col-lg-3 mb-0 mb-lg-0">
			<a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g4.png" data-fancybox="gallery1" style="height:373px;">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g4.png" alt="..." style="height:373px;"></div>
			</a>
          </div>
		  
          <div class="col-lg-3">
			<a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g5.png" data-fancybox="gallery1" style="height:373px;">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g5.png" alt="..." style="height:373px;"></div>
			</a>
          </div>  
       
          <div class="col-lg-3">
			<a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g6.png" data-fancybox="gallery1" style="">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g6.png" alt="..." style=""></div>
			</a>
          </div>
		  
		  <div class="col-lg-3">
			<a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g7.png" data-fancybox="gallery1" style="">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g7.png" alt="..." style=""></div>
			</a>
          </div>
		  
		  <div class="col-lg-3">
			  <a class="primary-overlay d-block mb-0 fancybox" href="images/mueke-g8.png" data-fancybox="gallery1" style="height:186px;">
              <div class="overlay-content"><img class="img-fluid" src="images/mueke-g8.png" alt="..." style="height:186px;"></div>
			</a>
          </div>
		  
		  <div class="col-lg-3">
			<a class="primary-overlay  fancybox" href="images/mueke-g9.png" data-fancybox="gallery1" style="">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/mueke-g9.png" alt="..." style=""></div>
			</a>
          </div> 
        </div>
      </div>
    </section>

    
<!--Grassroots campaign-->


<!--Be Part of Us-->
<section class="text-center mx-auto mt-5 mb-5">
<div class="container">
		<h2 class="display-6 fw-bold text-lg-start">Donate Today</h2>
			<div class="divider py-1 bg-warning mb-5 w-10"></div>
	<form action="{{route('donations')}}" method="post">
	@csrf
	<div class="row">
		<p class="mb-5 text-lg-start" style="color:#666;">Your donation will enable our team to keep spreading the word and reach out to more voters, Any amount you donate<br> will be higly appreciated.</p>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="inputFirstName"></label>
				<input type="text" class="form-control" name="name" id="inputFirstName" placeholder="First Name" required>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="email"></label>
				<input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label for="email"></label>
				<input type="text" class="form-control" name="amount" id="inputEmail" placeholder="Donate Ksh." required>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<button class="button-donate text-center text-white ms-5 mt-4" type="submit">Donate</button>
			</div>
		</div>
	</div></form>
</div>
</section>
<!--Be Part of Us-->

<!--Footer-->








@include('layouts.footer')
<!--Footer-->
	
	<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
