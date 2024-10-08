<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Brands</title>

   
</head>
@include('libraries.style')
<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    @include('components.navbar')
    </nav>
<body data-bs-theme="light">

<!-- Start Hero Section -->
<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Brands</h1>
								<p class="mb-4">Hardware store featuring top brands for all your DIY, home improvement, and professional needs. Explore our wide selection today. </p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="images/brand.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

<!-- Page Content -->
<div class="container">
  <div class="row text-center text-lg-start">
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/bosch.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/Dulux.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/Milwaukee.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/markit.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/Ryobi-Logo.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/hitachi.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/Husqvarna-logo.jpg" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
      <a href="#" class="d-block mb-4 h-100" style="height: 200px; display: flex; align-items: center; justify-content: center;">
        <img class="img-fluid img-thumbnail" src="images/stanely1.png" alt="" style="max-width: 100%; max-height: 100%; object-fit: contain;">
      </a>
    </div>
  </div>
</div>


</div>
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