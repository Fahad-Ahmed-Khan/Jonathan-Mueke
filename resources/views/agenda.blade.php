<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,700">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
	<link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
    @include('layouts.navbar')
		
<div class="banner-container" id="section-1">
	<div class="banner">
		<div class="bg-banner">
			<p class="text-white ms-5" style="position:relative;top:100px;width:261px;font-weight:800;font-size:24px;">Jonathan Mueke</p>
			<p class="text-white" style="position:relative;top:100px;width:378px;font-weight:900;font-size:54px;">My Agenda</p>
		</div>
	
		<div class="mueke">
			<div class="socials">
				
			</div>
		</div>
	</div>
</div>
		
		<section class="text-center text-md-start mt-5" >
		@foreach($Agenda as $agendas)
	<div class="container">
		<h2 class="fw-bold text-start mb-3" id="agenda">My Agenda</h2>
			<div class="divider py-1 bg-warning mb-5 w-10"></div>
		<div class="row g-lg-5 g-md-3 g-sm-2">
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/water.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Lack of Water</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">J.Mueke is committed to bringing change,Water issues will be resolved under his tenure.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Water shortage in Kitui has been a huge challenge for the people of Kitui County. 
What I witnessed this morning in Mwingi North was heartbreaking.</p>
				</div>
				@endforeach
				<div class="col-lg-4 col-md-4 mt-5">
					<img src="images/case.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Unemployment</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone. Our economy is struggling, unemployment is at its highest and corruption is getting worse.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Even in the middle of this pandemic, people have stolen money set aside to save our lives.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5">
					<img src="images/hunger.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Hunger</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">With millions of Kenyans going without food, fighting Covid-19 and focusing on ecomonic recovery
should be our priority as a country.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/healthcares.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Healthcare</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Together we the people achieve more than any single person could ever do alone.Healthcare for all will be a priority once elected as Governor of Kitui</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Kitui County has over 90 closed, non operational and un-equipped health facilities.
Our 2021/2022 budget is KSH 12.5 billion.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
					<img src="images/bridges.png" class="img-fluid rounded-circle mt-1" style="width:78px;height:78px;">
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Infrastructure</a></p>
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
		
	@include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
