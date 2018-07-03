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

	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>JENIS KAMAR : <?php echo $jenis['nama'] ?></h1>
					<img src="<?php echo base_url('uploads/'.$jenis['image'])?>" alt="">
				</div>
				<hr>
				<div class="col-md-8">
					<h3>Detail</h3>
					<?php echo form_open('Home/complete'); ?>
					<div class="form-group">
						<label for="">Harga</label>
						<input type="text" value="<?php echo $jenis['harga'] ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label for="">Tanggal</label>
						<input type="date" name="tanggal" value="<?php echo date('Y-m-d') ?>" class="form-control" readonly>
					</div>
					<div class="form-group">
						<label for="">Tanggal Cek In</label>
						<input type="date" name="tanggal_in" value="<?php if(isset($this->session->userdata('search')['tanggal_in'])) echo date('Y-m-d',strtotime($this->session->userdata('search')['tanggal_in'])); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Tanggal Cek Out</label>
						<input type="date" name="tanggal_out" value="<?php if(isset($this->session->userdata('search')['tanggal_out'])) echo date('Y-m-d',strtotime($this->session->userdata('search')['tanggal_out'])); ?>" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Kamar</label>
						<select name="fk_id_kamar" class="form-control">
							<?php foreach ($list_kamar as $value): ?>
								<option value="<?php echo $value['id'] ?>"><?php echo $value['no_kamar'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<input type="submit" class="btn btn-block btn-primary btn-lg" value="Book">
					<?php echo form_close(); ?>
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
			<div class="row">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart3" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</small> 
						<small class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
				</div>
			</div>
		</div>
	</footer>
</div>
<?php $this->load->view('sub/footer') ?>