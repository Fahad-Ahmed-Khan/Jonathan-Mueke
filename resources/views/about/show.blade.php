<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
   @include('layouts.navbar')

   <div class="container-xl mt-5 mb-5">
	<div class="row g-4">
		<div class="col-md-8 mx-auto">
			<p class="text-center my-5 text-dark fw-bold fs-3 mt-5" id="section-1"><br>{{$aboutus->title}}</p>

			<img src="/images/Mask_Group_2.png" class="float-center rounded img-fluid ms-5">

			<p class="mt-4 text-center"><i class="fa fa-angle-double-right"></i>

{{$aboutus->description}}</p>
		</div>
	</div>
</div>

    @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
