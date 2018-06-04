<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

	<div id="page">

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url('template/')?>images/img_bg_5.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h2>Welcome to the DM_Hotel</h2>
										<h1>Selamat Datang <?php echo $this->session->userdata('logged_in')['username']; ?></h1>
										<p><a class="btn btn-primary btn-demo" href="#"> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url('template/')?>images/img_bg_4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h2>1641720163</h2>
										<h1>Nama : Achmad Mahfud</h1>
										<p><a class="btn btn-primary btn-demo" href="#"> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url('template/')?>images/img_bg_3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluids">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h2>1641720083</h2>
										<h1>Desvin Renata</h1>
										<p><a class="btn btn-primary btn-demo" href="#"> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(<?php echo base_url('template/')?>images/img_bg_4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<h2>Come &amp; enjoy the unforgetable nights</h2>
										<h1>In the heart of DM_Hotel</h1>
										<p><a class="btn btn-primary btn-demo" href="#"> View Detail</a> <a class="btn btn-primary btn-learn">Know More</a></p>
									</div>
								</div>
							</div>
						</div>
					</li>	   	
				</ul>
			</div>
		</aside>
		<div id="colorlib-reservation">
			<div class="container">
				<div class="row">
					<div class="col-md-12 search-wrap">
						<form method="post" class="colorlib-form">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label for="date">Check-in:</label>
										<div class="form-field">
											<i class="icon icon-calendar2"></i>
											<input type="text" id="date" class="form-control date" placeholder="Check-in date">
										</div>
									</div>
								</div>
								<div class="col-md-5">
									<div class="form-group">
										<label for="date">Check-out:</label>
										<div class="form-field">
											<i class="icon icon-calendar2"></i>
											<input type="text" id="date" class="form-control date" placeholder="Check-out date">
										</div>
									</div>
								</div>
								<div class="col-md-2">
									<input type="submit" name="submit" id="submit" value="Search" class="btn btn-primary btn-block">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-reception"></i>
							</span>
							<h3>24/7 Front Desk</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-herbs"></i>
							</span>
							<h3>Spa Suites</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Transfer Services</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-cheers"></i>
							</span>
							<h3>Restaurant &amp; Bar</h3>
							<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-rooms" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
						<h2>Rooms &amp; Suites</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel owl-carousel2">
							<div class="item">
								<a href="images/room-1.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-1.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Suite</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">99</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-2.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-2.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">199</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-3.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-3.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Family Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">249</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Two double beds</li>
										<li><i class="icon-check"></i> Babysitting facilities</li>
										<li><i class="icon-check"></i> 1 free bed available on request</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-4.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-4.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Classic Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">150</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Only 10 rooms are available</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-5.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-5.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Double Room</a></h3>
									<p class="price">
										<span class="currency">$</span>
										<span class="price-room">200</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
							<div class="item">
								<a href="images/room-6.jpg" class="room image-popup-link" style="background-image: url(<?php echo base_url('template/')?>images/room-6.jpg);"></a>
								<div class="desc text-center">
									<span class="rate-star"><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full full"></i><i class="icon-star-full"></i></span>
									<h3><a href="rooms-suites.html">Superior Family Room</a></h3>
									<p class="price">
										<span class="currency"><small>$</small></span>
										<span class="price-room">299</span>
										<span class="per">/ per night</span>
									</p>
									<ul>
										<li><i class="icon-check"></i> Perfect for traveling couples</li>
										<li><i class="icon-check"></i> Breakfast included</li>
										<li><i class="icon-check"></i> Price does not include VAT &amp; services fee</li>
									</ul>
									<p><a class="btn btn-primary btn-book">Book now!</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
		</div>
		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>DM_Hotel</h4>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					
					<div class="col-md-3">
						<h4>Recents Blog Post</h4>
						<ul class="colorlib-footer-links">
							
						</ul>
					</div>

					<div class="col-md-3 col-md-push-1">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<?php $this->load->view('sub/footer') ?>