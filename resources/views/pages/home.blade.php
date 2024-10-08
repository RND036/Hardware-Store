@extends('layout.layouthome')
@section('content1')
<h1>Modern Hardware <span clsas="d-block">Supply Store</span></h1>
<p class="mb-4">
At Tech Hardware Store, we provide a wide range of high-quality tools, materials, and supplies for all your hardware needs. Whether you're a professional contractor or a DIY enthusiast, you'll find everything you need to complete your projects with ease. Visit us for exceptional service and expertise!</p>
<p><a href="" class="btn btn-secondary me-2">Shop Now</a><a href="#" class="btn btn-white-outline">Explore</a></p>
 @endsection
 <!-- Start Product Section -->
 @section('content2')
<h2 class="mb-4 section-title">Built with Quality Tools.</h2>
<p class="mb-4">where every product is crafted with precision using top-quality tools.Experience the difference of quality craftsmanship at Tech Hardware Store. </p>
<p><a href="shop.html" class="btn">Explore</a></p>
 @endsection
 @section('content3')
 <a class="product-item" href="cart.html">
	<img src="images/hammer.png" class="img-fluid product-thumbnail">
	<h3 class="product-title">Tolsen Claw Hammer</h3>
	<strong class="product-price">Rs.1540.00</strong>

	<span class="icon-cross">
	<img src="images/cross.svg" class="img-fluid">
	</span>
	</a>
 @endsection

 @section('content4')
<a class="product-item" href="cart.html">
<img src="images/powertools.png" class="img-fluid product-thumbnail">
<h3 class="product-title">Dong Cheng Electric Drill</h3>
<strong class="product-price">Rs.7800.00</strong>

<span class="icon-cross">
<img src="images/cross.svg" class="img-fluid">
</span>
</a>
 @endsection

 @section('content5')
 <a class="product-item" href="cart.html">
							<img src="images/handtools1.png" class="img-fluid product-thumbnail">
							<h3 class="product-title">Hand Tools Box</h3>
							<strong class="product-price">Rs.4300.00</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
 @endsection

 <!-- Start Why Choose Us Section -->
@section('content6')
<h2 class="section-title">Why Choose Us</h2>
						<p>we understand that making the right choice for your needs is paramount. That's why we stand out from the crowd, offering not just products/services, but a commitment to excellence that exceeds expectations.</p>
@endsection

@section('content7')
<div class="icon">
										<img src="images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>We understand the importance of receiving your orders quickly and at no extra cost. With our fast and free shipping service, your items are delivered within two to three days, ensuring you get what you need when you need it </p>
@endsection
@section('content8')
<div class="icon">
										<img src="images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
@endsection

@section('content9')
<div class="feature">
									<div class="icon">
										<img src="images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>We pride ourselves on offering round-the-clock customer support. Our dedicated team is available 24/7 to assist you with any questions or issues you might have, ensuring that your shopping experience is smooth and worry-free </p>
								</div>
@endsection

@section('content10')
<div class="feature">
									<div class="icon">
										<img src="images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p> We believe in making returns as simple as possible. Our hassle-free return policy allows you to return items with ease, providing a stress-free shopping experience from start to finish .</p>
								</div>
@endsection

<!-- Start We Help Section -->
@section('content11')
<h2 class="section-title mb-4">We Help You Make Modern Interior Design</h2>
						<p>we're dedicated to transforming your space into a modern masterpiece. With our expertise and passion for interior design, we're here to help you craft a living environment that reflects your style, personality, and aspirations. Step into a realm where innovation thrives and every corner tells a story. Let's embark on a journey to redefine modern living together.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Cutting-edge design concepts tailored to modern aesthetics</li>
							<li>Seamless integration of technology for a smart and sophisticated living space</li>
							<li>Customized solutions to optimize space utilization and enhance functionality</li>
							<li>Collaboration with top-notch architects and designers to bring your vision to life</li>
						</ul>
						<p><a herf="#" class="btn">Meet Our Experts</a></p>
@endsection
<!-- Start Popular Product -->
@section('content12')
<div class="thumbnail">
								<img src="images/product-1.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Nordic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
@endsection
@section('content13')
<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-2.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Kruzo Aero Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
@endsection
@section('content14')
<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="images/product-3.png" alt="Image" class="img-fluid">
							</div>
							<div class="pt-3">
								<h3>Ergonomic Chair</h3>
								<p>Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio </p>
								<p><a href="#">Read More</a></p>
							</div>
						</div>
@endsection
<!-- Start Testimonial Slider -->
@section('content15')
<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Just wanted to drop a note to say how impressed I was with your customer service team. They solved my issue in no time and made sure I was happy every step of the way. Keep up the fantastic work!&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">Customer At Tech.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Your team's dedication to customer satisfaction is truly commendable. I had an issue with my order, and it was resolved swiftly and efficiently. Thank you for making it such a hassle-free experience!&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Nirasha Samarathunga</h3>
													<span class="position d-block mb-3">Customer At Tech.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Shopping on your site is such a breeze! The layout is user-friendly, and I can find what I'm looking for without any trouble. This streamlined experience makes online shopping enjoyable.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="images/person-1.png" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Shakya Edirisigha</h3>
													<span class="position d-block mb-3">Customer At Tech.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>
@endsection
<!-- Start Blog Section -->
@section('content16')
<div class="container">
				<div class="row mb-5">
					<div class="col-md-6">
						<h2 class="section-title">Recent Blog</h2>
					</div>
					<div class="col-md-6 text-start text-md-end">
						<a href="#" class="more">View All Posts</a>
					</div>
				</div>

				<div class="row">

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">First Time Home Owner Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">How To Keep Your Furniture Clean</a></h3>
								<div class="meta">
									<span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

					<div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
						<div class="post-entry">
							<a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
							<div class="post-content-entry">
								<h3><a href="#">Small Space Furniture Apartment Ideas</a></h3>
								<div class="meta">
									<span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
@endsection