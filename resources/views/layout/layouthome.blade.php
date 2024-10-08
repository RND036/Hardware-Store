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
		
		<title>Tech Hardware Store</title>
	</head>

	<body data-bs-theme="light">
    <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    @include('components.navbar')
    </nav>
	
		<!-- heading with carousel -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
                            @yield('content1')
							</div>
						</div>
						<div class="col-lg-7">
						<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="images/handtools1.png" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item">
                                 <img src="images/powertools.png" class="d-block" alt="...">
                                </div>
                                <div class="carousel-item">
                                   <img src="images/paintcans.png" class="d-block" alt="...">
                                </div>
								<div class="carousel-item">
                                   <img src="images/electricals.png" class="d-block" alt="..." >
                                </div>
                            </div>
                        </div>
						
					</div>
				</div>
			</div>
</div>
		

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						@yield('content2')
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						@yield('content3')
					</div> 
					<!-- End Column 2 -->

					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						@yield('content4')
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						@yield('content5')
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- product categorie-->
		<div class="producthead12">
			<h1>Product categories</h1>
		</div>
		<div class="cat">
			
		@include('components.product')
</div>
<!--new product video-->
<div class="video">
<h1>Introducing Salto Smart Locks</h1>
<p>revolutionize security with advanced technology, providing convenient and reliable access control solutions</p>
<video autoplay muted loop w->
  <source src="video/smartlock.mp4" type="video/mp4">
  
</video>

</div>
		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="images/img-grid-1.jpg" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="images/img-grid-2.jpg" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="images/img-grid-3.jpg" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						@yield('content11')
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->
		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						@yield('content6')
						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									@yield('content7')
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									@yield('contennt8')
								</div>
							</div>

							<div class="col-6 col-md-6">
								 @yield('content9')
							</div>

							<div class="col-6 col-md-6">
								 @yield('content10')
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="images/why-choose-us-img.jpg" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!--brands-->
		<div class="brandshead">
         <h1>Top Brands</h1>
		@include('components.brands')
</div>

		

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">What Customers Says About Us!!</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							@yield('content15')

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		<div class="blog-section">
			@yield('content16')
		</div>
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->
		<footer class="footer-section">
			@include('components.footer')
		</footer>
		<!-- End Footer Section -->	

		@include('script.scripts')
	</body>

</html>
