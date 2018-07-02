<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<h1>List Jenis</h1>
					<a href="<?php echo base_url('Jenis/tambah') ?>" class="btn btn-sm btn-primary float-right">Tambah</a>
					<table class="table table-hover table-bordered">
						<thead>	
								<th>#</th>
								<th>Nama</th>
								<th>harga</th>
								<th>Image</th>
								<th>Aksi</th>
						</thead>
						<tbody>
							<?php foreach ($jenis_data as $key => $value): ?>
								<tr>
									<td><?php echo ++$key ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['harga'] ?></td>
									<td><img src="<?php echo base_url('uploads/'.$value['image']) ?>" alt="" width="100px"></td>
									<td>
										<a href="<?php echo base_url('Kamar/jenis/'.$value['id']) ?>" class="btn btn-sm btn-info">List Kamar</a>
										<a href="<?php echo base_url('Jenis/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Jenis/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
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