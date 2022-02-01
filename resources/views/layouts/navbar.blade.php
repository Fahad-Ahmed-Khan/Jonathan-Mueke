 <!--<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" class="ms-5" alt="" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>
  </div>
</nav>-->
 <nav class="navbar navbar-expand-lg navbar-expand-xl bg-white navbar-light w-100 fixed-top shadow p-1 mb-5 bg-body rounded">
		<div class="container-fluid">
		<a href="/" class="navbar-brand ms-5"><img class="img-fluid ms-5" src="/images/logo.svg" style="height:100px;"></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
			<div class="container"><span class="navbar-toggler-icon"></span></div>
		</button>
			<div class="collapse navbar-collapse" id="navmenu">
				<ul class="navbar-nav ms-auto fw-bold">
					<li class="nav-item">
						<a href="/" class="nav-link px-4 py-3 {{'/' == request()->path() ? 'active' : ''}}">Home</a>
					</li>
					<li class="nav-item">
						<a href="/agenda" class="nav-link px-4 py-3 {{'agenda' == request()->path() ? 'active' : ''}}">My Agenda</a>
					</li>
					<li class="nav-item">
						<a href="/profile" class="nav-link px-4 py-3 {{'profile' == request()->path() ? 'active' : ''}}">My Profile</a>
					</li>
					<li class="nav-item">
						<a href="/gallery" class="nav-link px-4 py-3 {{'gallery' == request()->path() ? 'active' : ''}}">Gallery</a>
					</li>
					<li class="nav-item">
						<a href="/biography" class="nav-link px-4 py-3" {{'biography' == request()->path() ? 'active' : ''}}>Bio</a>
					</li>
					<li class="nav-item px-4">
						<a href="/contactus" class="bg-success text-white btn btn-success  nav-link text-primary fw-bold mt-2 me-5 {{'contactus' == request()->path() ? 'active' : ''}}">Join Our Mission</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	

