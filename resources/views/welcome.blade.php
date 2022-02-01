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
		<h2 class="fw-bolder display-5 mt-5 text-start">Why Mueke</h2>
			<div class="divider py-1 bg-warning mb-1 w-10"></div>
		<div class="row g-3 mt-0">
		@foreach($data as $aboutus)
			<div class="col-lg">
				<img src="{{ asset('storage/'.$aboutus->image) }}" class="img-fluid shadow-lg" style="">
				<p class="mt-3 text-success fw-bold fs-5 text-lg-start">{{$aboutus->title}}</p>
				<p class="fs-6 text-lg-start"> {{$aboutus->description}}</p>
				<p class="text-success fw-bold text-lg-start"><a href="{{route('about.show',$aboutus->id)}}" class="text-success text-decoration-none">{{$aboutus->button}}</a></p>
				<!--<img src="images/hr-2.png" class="img-fluid float-start my-2">-->
			</div>
			@endforeach
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
    <section id="features" class="features section text-md-start">
        <div class="container">
			<h2 class="fw-bold text-start mt-5 mb-3" id="agenda">My Agenda</h2>
			<div class="divider py-1 bg-warning mb-1 w-10"></div>
            <div class="row">
				@foreach($Agenda as $agendas)
			   <div class="col-md-4 text-start">
                    <img src="images/water.png" class="img-fluid rounded-circle mt-5 mb-2 mt-5" style="width:78px;height:78px;">
                    <div class="feature-content">
                        <p class="fw-bold fs-6 text-lg-start"><a href="/agendas.show/{{$agendas->id}}" class="text-decoration-none text-dark">{{$agendas->agenda_title}}</a></p>
						<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">{{$agendas->description}}</p>
				   </div>
                </div>
				@endforeach
            </div>
        </div>
    </section><!-- features -->
<!--My Agenda-->

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
