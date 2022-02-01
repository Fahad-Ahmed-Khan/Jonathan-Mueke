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
	@include('livewire.frontend.modal-forms.donate.donations')
<div class="banner-container bg-light" id="section-1">
	<div class="banner">
		<div class="bg-banner">
			<p class="text-white ms-5" style="position:relative;top:100px;width:261px;font-weight:800;font-size:24px;">Jonathan Mueke</p>
			<p class="text-white" style="position:relative;top:100px;width:378px;font-weight:900;font-size:54px;">Get In Touch</p>
		</div>
	
		<div class="mueke">
			<div class="socials">
				
			</div>
		</div>
	</div>
</div>

<div class="container mt-4 mb-4">
	<div class="row g-4">
		<div class="col-lg col-md"><p style="font-weight:800;font-size:28px;">I want to:</p></div>
		<div class="col-lg col-md"><button class="btn btn-outline-success fw-bold" data-bs-toggle="modal" data-bs-target="#donate" style="width:138px;height:52px;">Donate</button></div>
		<div class="col-lg col-md"><button class="btn btn-success fw-bold" style="width:212px;height:52px;">Make an Enquiry</button></div>
		<div class="col-lg col-md"><button class="btn btn-outline-success fw-bold" style="width:233px;height:52px;">Join Team Mueke</button></div>
	</div>
</div>
@if(session('flash'))
		<p style="color:green">{{session('flash')}}</p>
@endif
<div class="container-xl mt-5 mb-5">
	<div class="row g-4">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<form action="/contactus" method="post">
				@csrf
					<div class="row mb-4">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputFirstName"></label>
								<input type="text" class="form-control" name="firstname" id="inputFirstName" placeholder="First Name" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputLastName"></label>
								<input type="text" class="form-control" name="lastname" id="inputLastName" placeholder="Last Name" required>
							</div>
						</div>
					</div>
					<div class="row mb-4">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="email"></label>
								<input type="text" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="phone"></label>
								<input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Phone" required>
							</div>
						</div>
					</div>
					<div class="form-group mb-4">
						<label for="inputMessage"></label>
						<textarea class="form-control" name="message" id="inputMessage" rows="5" placeholder="Your Enquiry" required></textarea>
					</div>
					<div class="d-grid gap-2">
						<input type="submit" class="btn-contact text-white fw-bold" value="Submit Enquiry">
					</div>
				</form>
			</div>
		</div>
		
			<div class="col-md-4 bg-sidebar">
				<p class="text-center my-5 text-white fw-bold fs-3">Reach Out or Visit Us</p>
				<p class="text-white text-start mb-5">Our team is on standby to listen to you. Feel free to reach out to us!</p>
				<div class="text-white"><img src="images/pin-location.png" class="img-fluid mx-2 my-3"><span>Mueke House, Kitui Kitui County.</span></div>
				<div class="text-white"><img src="images/telephone.png" class="img-fluid mx-2 my-3"><span>+254 700 222 000</span></div>
				<div class="text-white"><img src="images/mail.png" class="img-fluid mx-2 my-3"><span>info@jmueke.com</span></div>--
			</div>
	</div>
</div>

@include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
