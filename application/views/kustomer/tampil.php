<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid.min.css" />
<link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/jsgrid/jsgrid-theme.min.css" />
<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<h1>List Kustomer</h1>
					<div id="jsGrid"></div>
				</div>
			</div>
		</div>
</div>
<?php $this->load->view('sub/footer') ?>

<script type="text/javascript" src="<?php echo base_url()?>assets/jsgrid/jsgrid.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/custom/grid.js"></script>