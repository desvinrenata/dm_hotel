<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">DM Hotel</a></div>
						</div>
						<?php var_dump($this->session->userdata('logged_in')) ?>
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
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li> -->
								<?php if ($this->session->userdata('logged_in') == null): ?>
									<li><a href="<?php echo base_url('Login') ?>">Login</a></li>
								<?php else: ?>
									<li><a href="<?php echo base_url('Login/logout') ?>">Logout</a></li>
								<?php endif ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>