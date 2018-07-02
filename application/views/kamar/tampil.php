<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<h1>List Kamar</h1>
					<a href="<?php echo base_url('Kamar/create') ?>" class="btn btn-sm btn-primary float-right">Tambah</a>
					<table class="table table-hover table-bordered">
						<thead>	
								<th>#</th>
								<th>Nama Jenis</th>
								<th>Nomor Kamar</th>
								<th>Status</th>
								<th>Aksi</th>
						</thead>
						<tbody>
							<?php foreach ($kamar_data as $key => $value): ?>
								<tr>
									<td><?php echo ++$key ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['no_kamar'] ?></td>
									<td>
										<?php if ($value['terpesan'] == 1): ?>
											Terpesan
											<?php else: ?>
												Kosong
										<?php endif ?>
									</td>
									<td>
										<a href="<?php echo base_url('Kamar/update/'.$value['id']) ?>" class="btn btn-sm btn-success">Update</a>
										<a href="<?php echo base_url('Kamar/delete/'.$value['id']) ?>" class="btn btn-sm btn-danger">Delete</a>
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