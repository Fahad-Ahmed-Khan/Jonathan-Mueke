<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mulish:300,400,600,700,800,900">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="/css/main.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
    @include('layouts.navbar')
	<section class="text-center text-md-start mt-5" id="stats-1">
	<div class="container">
		<h2 class="fw-bold text-start mb-3" id="agenda"><br><br>A glimpse of my Achievement</h2>
			<div class="divider py-1 bg-warning mb-5 w-10"></div>
		<div class="row g-lg-5 g-md-3 g-sm-2">
				<div class="col-lg-4 col-md-4 mt-5 ">
					<!--<img src="/images/water.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">-->
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">New Street Lights</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">The immediate impact from the street lighting program was a sharp reduction in the crime rate in Nairobi.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">In 2013 around 1800 serious cases used to be reported every year.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5">
					<!--<img src="images/case.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">-->
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Garbage Collection (Tons/day)</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Ensured that the 26 legal collection points were fully functional and collection was being done regularly, twice a week.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Increased the number of collection trucks from 12 trucks as of 2013, to a total 60 trucks by 2017.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5">
				<!--	<img src="images/hunger.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">-->
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Students Educated</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Constructed 6 new modern schools with 5 having both pre-primary and primary sections. These are St. Catherine’s, St. Bakhita, Marurui, Marura, Mathari and St. Michaels Secondary.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">172 new classrooms were built in over 20 schools such as Olympic Primary, Marurui primary, Kariobangi Primary, Mathare primary etc.</p>
				</div>
				<div class="col-lg-4 col-md-4 mt-5 ">
				<!--	<img src="images/healthcares.png" class="img-fluid rounded-circle mb-2" style="width:78px;height:78px;">-->
					<p class="fw-bold fs-6"><a href="#" class="text-decoration-none text-dark">Healthcare Centers Constructed</a></p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Built a 120 bed maternity wing at Mbagathi hospital in 2014 which did not have one before.</p>
					<p class="text-justify text-md-start" style="color:#666;font-weight:400;font-size:14px;">Added a 112 body capacity mortuary at Mbagathi hospital where none existed before to help reduce the congestion at City Mortuary.</p>
				</div>
		</div>
	</div>
</section>

   @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
