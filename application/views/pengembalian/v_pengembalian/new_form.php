<html>
<!DOCTYPE html>
<html lang="en">

	<title>Tambah data Mobil</title>

    <!-- Bootstrap Core CSS -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/dist/css/template.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div id="wrapper">

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('pengembalian/c_pengembalian/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('pengembalian/v_pengembalian/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">id pengembalian</label>
								<input class="form-control <?php echo form_error('id_pengembalian') ? 'is-invalid':'' ?>"
								 type="number" name="id_pengembalian" placeholder="id_pengembalian" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengembalian') ?>
								</div>

							<div class="form-group">
								<label for="name">id transaksi</label>
								<input class="form-control <?php echo form_error('id_transaksi') ? 'is-invalid':'' ?>"
								 type="text" name="id_transaksi" min="0" placeholder="id_transaksi" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengembalian') ?>
								</div>

							</div>
								<div class="form-group">
								<label for="name">harga</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="tetxt" name="harga" placeholder="harga" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengembalian') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">terlambat</label>
								<input class="form-control <?php echo form_error('terlambat') ? 'is-invalid':'' ?>"
								 type="tetxt" name="terlambat" placeholder="terlambat" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengembalian') ?>
								</div>
							</div>

							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("pengembalian/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("pengembalian/_partials/scrolltop.php") ?>

		<?php $this->load->view("pengembalian/_partials/js.php") ?>

</body>

</html>