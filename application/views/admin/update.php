<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box mx-auto">
						<h2>Update Data</h2>
						<?php echo form_open('Admin/proses_update/'.$admin['id']) ?>
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="username" class="form-control" value="<?php echo $admin['username'] ?>">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="text" name="password" class="form-control" value="<?php echo $admin['password'] ?>">
						</div>
						<div class="form-group">
							<label>Level</label>
							<select name="level" class="form-control">
								<option value="1">Admin</option>
								<option value="2">Operator</option>
							</select>
						</div>
						<input type="submit" value="Update" class="btn btn-success">
						<?php echo form_close() ?>
					</div>
				</div>
			</div>
		</div>
</div>
	<?php $this->load->view('sub/footer') ?>