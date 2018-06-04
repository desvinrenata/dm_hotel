<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<h1>List Admin</h1>
					<a href="<?php echo base_url('Admin/tambah') ?>" class="btn btn-sm btn-primary float-right">Tambah</a>
					<table class="table table-hover table-bordered">
						<thead>	
								<th>#</th>
								<th>Username</th>
								<th>Password</th>
								<th>Level</th>
								<th>Aksi</th>
						</thead>
						<tbody>
							<?php foreach ($list_admin as $key => $value): ?>
								<tr>
									<td><?php echo ++$key ?></td>
									<td><?php echo $value['username'] ?></td>
									<td><?php echo $value['password'] ?></td>
									<td><?php echo $value['level'] ?></td>
									<td>
										<a href="<?php echo base_url('Admin/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Admin/proses_delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
</div>
	<?php $this->load->view('sub/footer') ?>