<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box mx-auto">
					<h2>Tambah Data</h2>
					<?php echo validation_errors(); ?>
					<?php echo forM_open(''); ?>
					<div class="form-group">
						<label for="">no_kamar</label>
						<input type="text" name="no_kamar" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Nama Jenis Kamar</label>
						<select name="fk_id_jenis" class="form-control">
							<?php foreach ($jenis as $value): ?>
								<option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<input type="submit" class="btn btn-primary" value="Tambah">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('sub/footer') ?>