<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box mx-auto">
						<h2>Cek IN</h2>
						<?php echo form_open('Admin/proses_tambah') ?>
						<div class="form-group">
							<label>Level</label>
							<select name="level" class="form-control">
								<option value="1">Admin</option>
								<option value="2">Operator</option>
							</select>
						</div>
						<input type="submit" value="Tambah" class="btn btn-primary">
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
</div>
	<?php $this->load->view('sub/footer') ?>