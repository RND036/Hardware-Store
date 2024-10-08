<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="images/favicon.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		@include('libraries.style')
		<title>other locations</title>
	</head>

	<body data-bs-theme="light">

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    @include('components.navbar')
    </nav>
		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Other Locations</h1>
								<p class="mb-4">Convenient hardware store locations to serve all your home improvement needs. Expert advice and quality products close to you. </p>
								
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/locations.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->
        <br>

		<div class="card mb-3 text-center">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48025.570335182936!2d79.81326476970663!3d6.934449801968045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2594c84eb6d63%3A0x8290d1a53a2f9095!2sRoyal%20Hardware%20Suppliers%20(Pvt)%20LTD!5e0!3m2!1sen!2slk!4v1716132134771!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="card-body">
    <h5 class="card-title">Main Branch</h5>
    <p class="card-text">Visit Our Main Barnch In Colombo</p>
    <p><i class="bi bi-geo-alt-fill"></i>82 6th Ln, Colombo 01300</p>
    <p><i class="bi bi-telephone-fill"></i>+94 77 993 6716</p>
   
  </div>
</div>
<div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">Sub Branch </h5>
    <p class="card-text">Visit Our Sub Branch In Kandy</p>
    <p><i class="bi bi-geo-alt-fill"></i>182 Colombo St, Kandy 20000</p>
    <p><i class="bi bi-telephone-fill"></i>+94 81 222 3750</p>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.52624633532!2d80.63539510000001!3d7.294615300000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3662a57a1ceb7%3A0x4301ef0e9dd00e92!2sSriharan%20Hardware!5e0!3m2!1sen!2slk!4v1716132197567!5m2!1sen!2slk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<br>
    <br>
    <br>
    <br>
    <br>

		<!-- Start Footer Section -->
		<footer class="footer-section">
			@include('components.footer')
		</footer>
		<!-- End Footer Section -->	

		@include('script.scripts')
	</body>

</html>
