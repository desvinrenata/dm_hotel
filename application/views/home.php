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
					<form method="post" class="colorlib-form" action="<?php echo base_url('Home/search') ?>">
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label for="date">Check-in:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" name='tanggal_in' class="form-control date" placeholder="Check-in date" value="<?php if(isset($this->session->userdata('search')['tanggal_in'])) echo $this->session->userdata('search')['tanggal_in']; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label for="date">Check-out:</label>
									<div class="form-field">
										<i class="icon icon-calendar2"></i>
										<input type="text" id="date" name='tanggal_out' class="form-control date" placeholder="Check-out date" value="<?php if(isset($this->session->userdata('search')['tanggal_out'])) echo $this->session->userdata('search')['tanggal_out']; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-2">
								<input type="submit" id="submit" value="Search" class="btn btn-primary btn-block">
							</div>
							<div class="col-md-2">
								<a href="<?php echo base_url('Home/reset_search') ?>" class="btn btn-danger btn-block">X Reset</a>
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
	
	<?php if ($this->session->userdata('search') != null): ?>
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
							<?php foreach ($jenis_kamar as $value): ?>
								<div class="item">
									<a href="#" class="room image-popup-link" style="background-image: url(<?php echo base_url('uploads/'.$value->image)?>);"></a>
									<div class="desc text-center">
										<h3><a href="rooms-suites.html"><?php echo $value->nama ?></a></h3>
										<p class="price">
											<span class="currency">$</span>
											<span class="price-room"><?php echo $value->harga ?></span>
											<span class="per">/ per night</span>
										</p>
										<ul>
											<li><i class="icon-check"></i> Only <?php echo $value->jml_tersedia ?> rooms are available</li>
											
										</ul>
										<p><a class="btn btn-primary btn-book">Book now!</a></p>
									</div>
								</div>
							<?php endforeach ?>
							
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<a href="#">View all rooms <i class="icon-arrow-right3"></i></a>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>


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