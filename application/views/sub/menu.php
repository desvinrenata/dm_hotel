<nav class="colorlib-nav" role="navigation">
	<div class="top-menu">
		<div class="container">
			<div class="row">
				<div class="col-xs-2">
					<div id="colorlib-logo"><a href="<?php echo base_url('Home') ?>">DM Hotel</a></div>
				</div>
				<div class="col-xs-10 text-right menu-1">
					<ul>
								<!-- <li class="active"><a href="index.html">Home</a></li>
								<li class="has-dropdown">
									<a href="rooms-suites.html">Rooms</a>
									<ul class="dropdown">
										<li><a href="#">Web Design</a></li>
										<li><a href="#">eCommerce</a></li>
										<li><a href="#">Branding</a></li>
										<li><a href="#">API</a></li>
									</ul>
								</li> 
								<li><a href="dining-bar.html">Dining &amp; Bar</a></li>
								<li><a href="aminities.html">Aminities</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="about.html">About</a></li>-->
								<?php if (isset($this->session->userdata('logged_in')['level'])): ?>
									<li><a href="<?php echo base_url('Booking') ?>">DASHBOARD</a></li> 
									<li><a href="<?php echo base_url('Jenis') ?>">CRUD Jenis</a></li> 
									<li><a href="<?php echo base_url('Kustomer') ?>">CRUD Kustomer</a></li> 
									<?php if ($this->session->userdata('logged_in')['level'] == 1): ?>
										<li><a href="<?php echo base_url('Admin') ?>">CRUD Admin</a></li> 
									<?php endif ?>
								<?php endif ?>
								<?php if ($this->session->userdata('logged_in') == null): ?>
									<li><a href="<?php echo base_url('Login/kustomer') ?>">Login</a></li>
									<?php else: ?>
										<li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
									<?php endif ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>