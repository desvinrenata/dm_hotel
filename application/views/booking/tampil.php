<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>List cek in</h1>
					<table class="table table-hover table-bordered">
						<thead>	
							<th>#</th>
							<th>No Book</th>
							<th>Date</th>
							<th>No Kamar</th>
							<th>Status</th>
							
						</thead>
						<tbody>
							<?php foreach ($list_cek_in as $key => $value): ?>
								<tr>
									<td><?php echo ++$key ?></td>
									<td><?php echo $value['no_book'] ?></td>
									<td><?php echo $value['date'] ?></td>
									<td><?php echo $value['no_kamar'] ?></td>
									<td>
										<?php if ($value['status'] == 1): ?>
											<span class="badge badge-primary">digunakan</span>
											<?php else: ?>
												<span class="badge badge-primary" style="background-color: red;">checked out</span>
											<?php endif ?>
										</td>
										
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
					<div class="col-12">
						<h1>List cek out</h1>
						<table class="table table-hover table-bordered">
							<thead>	
								<th>#</th>
								<th>No Book</th>
								<th>Tanggal cek in</th>
								<th>Date</th>
								<th>No Kamar</th>
								
								
							</thead>
							<tbody>
								<?php foreach ($list_cek_out as $key => $value): ?>
									<tr>
										<td><?php echo ++$key ?></td>
										<td><?php echo $value['no_book'] ?></td>
										<td><?php echo $value['tanggal_cek_in'] ?></td>
										<td><?php echo $value['date'] ?></td>
										<td><?php echo $value['no_kamar'] ?></td>
										
											
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $this->load->view('sub/footer') ?>