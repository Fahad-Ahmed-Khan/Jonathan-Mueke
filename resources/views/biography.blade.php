<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/logo/profilePhoto.png')}}">
    <title>JMUEKE | OFFICIAL WEBSITE</title>
  </head>
  <body>
    @include('layouts.navbar')
		
<section id="gallery">
  <div class="container">
  <br><br><br><br>  
  <br><h2 class="heading text-dark text-center mt-5 mb-5 fw-bolder fs-1">Experience</h2>
  <div class="row">
	   <div class="col-lg-3 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Primary School</h5>
		<h6 class="card-subtitle mb-4 text-muted">Primary School Studies</h6>
        <p class="card-text mb-4">I went to Kilimani Primary School.</p>
       
      </div>
     </div>
    </div>
    <div class="col-lg-3 mb-4">
    <div class="card">
      
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">High School</h5>
		<h6 class="card-subtitle mb-4 text-muted">High School Studies</h6>
        <p class="card-text mb-4">I went to Nairobi School. </p>
       
      </div>
     </div>
    </div>
  <div class="col-lg-3 mb-4">
  <div class="card">
      
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Undergraduate</h5>
		<h6 class="card-subtitle mb-4 text-muted">Bsc Computer Science</h6>
        <p class="card-text mb-4">Wayne State University – Detroit Michigan. </p>
       
      </div>
      </div>
    </div>
    <div class="col-lg-3 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Postgraduate</h5>
		<h6 class="card-subtitle mb-4 text-muted">MBA - Dual Major in Global Information Technology and Entrepreneurship,</h6>
        <p class="card-text mb-4">Oakland University - Rochester Michigan. </p>
       
      </div>
     </div>
    </div>
  </div>
</div>
</section>

	<h2 class="heading text-dark text-center mt-5 mb-5 fw-bolder fs-1">Experience</h2>
	
	<section id="gallery">
  <div class="container">
    <div class="row">
	   <div class="col-lg-4 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">System administrator</h5>
        <p class="card-text mb-4">K-Mart - USA. </p>
       
      </div>
     </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="card">
      
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Plant Technology Support</h5>
        <p class="card-text mb-4">Daimler Chrysler - USA.</p>
       
      </div>
     </div>
    </div>
  <div class="col-lg-4 mb-4">
  <div class="card">
      
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Technology Services</h5>
        <p class="card-text mb-4">FISERV - USA </p>
      </div>
      </div>
    </div>
    <div class="col-lg-4 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Proprietor/ Director</h5>
        <p class="card-text mb-4">E-manage - Africa </p>
      </div>
     </div>
    </div>
	
	<div class="col-lg-4 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Majority Share Holder/ Director</h5>
        <p class="card-text mb-4">Tsg Realty </p>
      </div>
     </div>
    </div>
	
	<div class="col-lg-4 mb-4">
    <div class="card">
     
      <div class="card-body">
        <h5 class="card-title fw-bold mb-4">Deputy Governor</h5>
        <p class="card-text mb-4">Nairobi County Government</p>
      </div>
     </div>
    </div>
  </div>
</div>
</section>
   
	 @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
