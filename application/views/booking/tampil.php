<?php $this->load->view('sub/header') ?>
<?php $this->load->view('sub/menu') ?>

<div class="page">
	<div id="colorlib-services">
		<div class="container">
			<div class="row">

				<div class="col-12">
					<nav>
						<div class="" id="nav-tab" role="tablist">
							<a class="btn btn-primary" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Booking</a>
							<a class="btn btn-warning" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Cek In</a>
							<a class="btn btn-danger" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cek Out</a>
						</div>
					</nav>
					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
							
							<h1>List Booking</h1>
							<table class="table table-hover table-bordered">
								<thead>	
									<th>#</th>
									<th>Nama</th>
									<th>No Book</th>
									<th>Tanggal</th>
									<th>Tanggal Cek In</th>
									<th>Tanggal Cek Out</th>
									<th>No Kamar</th>
									<th>Harga permalam</th>
									<th>Jml Malam</th>
									<th>Total</th>
									<th>Cek In</th>

								</thead>
								<tbody>
									<?php foreach ($list_booking as $key => $value): ?>
										<?php 
										$tgl_in = new DateTime($value['tanggal_in']);
										$tgl_out = new DateTime($value['tanggal_out']);
										$selisih = $tgl_in->diff($tgl_out);

										?>
										<tr>
											<td><?php echo ++$key ?></td>
											<td><?php echo $value['nama'] ?></td>
											<td><?php echo $value['no_book'] ?></td>
											<td><?php echo $value['tanggal'] ?></td>
											<td><?php echo $value['tanggal_in'] ?></td>
											<td><?php echo $value['tanggal_out'] ?></td>
											<td><?php echo $value['no_kamar'] ?></td>
											<td><?php echo $value['harga'] ?></td>
											<td><?php echo $selisih->d ?></td>
											<td><?php echo $value['harga']*$selisih->d ?></td>
											<td><a href="<?php echo base_url('Booking/cek_in/'.$value['id']) ?>" class="btn btn-success btn-sm">Cek In</a></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>

						</div>
						<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
							
							<h1>List cek in</h1>
							<table class="table table-hover table-bordered">
								<thead>	
									<th>#</th>
									<th>Nama</th>
									<th>No Book</th>
									<th>Date</th>
									<th>No Kamar</th>
									<th>Status</th>
									<th>Cek Out</th>
								</thead>
								<tbody>
									<?php foreach ($list_cek_in as $key => $value): ?>
										<tr>
											<td><?php echo ++$key ?></td>
											<td><?php echo $value['nama'] ?></td>
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

											<td><a href="<?php echo base_url('Booking/cek_out/'.$value['id'].'/'.$value['no_kamar']) ?>" class="btn btn-warning btn-sm">Cek Out</a></td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>

						</div>
						<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

							<h1>List cek out</h1>
							<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
							<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
							<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
							<script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
							<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
							<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
							<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
							<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
							<script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
							<script>
								$(document).ready( function () {
									$('#myTable').DataTable( {
										dom: 'Bfrtip',
										buttons: [
										'pdf'
										]
									} );
								} );
							</script>
							<table id="myTable" class="table table-hover table-bordered">
								<thead>	
									<th>#</th>
									<th>Nama</th>
									<th>No Book</th>
									<th>Tanggal cek in</th>
									<th>Date</th>
									<th>No Kamar</th>
								</thead>
								<tbody>
									<?php foreach ($list_cek_out as $key => $value): ?>
										<tr>
											<td><?php echo ++$key ?></td>
											<td><?php echo $value['nama'] ?></td>
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
	</div>
	<?php $this->load->view('sub/footer') ?>