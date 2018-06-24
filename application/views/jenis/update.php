<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box mx-auto">
					<h2>Update Data</h2>
					<?php if (isset($error)) {
						echo $error;
					} ?>
					<?php echo validation_errors(); ?>
					<?php echo form_open_multipart(''); ?>
					<div class="form-group">
						<label for="">Nama</label>
						<input type="text" name="nama" class="form-control" value="<?php echo $jenis['nama'] ?>">
					</div>
					<div class="form-group">
						<label for="">harga</label>
						<input type="number" name="harga" class="form-control" value="<?php echo $jenis['harga'] ?>">
					</div>
					<div class="form-group">
						<label for="">image</label>
						<input type="file" name="image" class="form-control">
					</div>
					<input type="submit" class="btn btn-primary" value="Tambah">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('sub/footer') ?>