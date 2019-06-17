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
						<a href="<?php echo site_url('mobil/c_mobil/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('mobil/v_mobil/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">No*</label>
								<input class="form-control <?php echo form_error('id_mobil') ? 'is-invalid':'' ?>"
								 type="number" name="id_mobil" placeholder="id_mobil" />
								<div class="invalid-feedback">
									<?php echo form_error('id_mobil') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Foto Mobil</label>
								<input class="form-control <?php echo form_error('foto_mobil') ? 'is-invalid':'' ?>"
								 type="file" name="image" min="0" placeholder="foto_mobil" />
								<div class="invalid-feedback">
									<?php echo form_error('foto_mobil') ?>
								</div>

							</div>
								<div class="form-group">
								<label for="name">Id Jenis*</label>
								<input class="form-control <?php echo form_error('id_jenis') ? 'is-invalid':'' ?>"
								 type="tetxt" name="id_jenis" placeholder="id_jenis" />
								<div class="invalid-feedback">
									<?php echo form_error('id_jenis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Type Mobil*</label>
								<input class="form-control <?php echo form_error('type_mobil') ? 'is-invalid':'' ?>"
								 type="tetxt" name="type_mobil" placeholder="type_mobil" />
								<div class="invalid-feedback">
									<?php echo form_error('type_mobil') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Merk Mobil*</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid':'' ?>"
								 type="text" name="merk" placeholder="merk" />
								<div class="invalid-feedback">
									<?php echo form_error('merk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No Polisi*</label>
								<input class="form-control <?php echo form_error('no_polisi') ? 'is-invalid':'' ?>"
								 type="text" name="no_polisi" placeholder="no_polisi" />
								<div class="invalid-feedback">
									<?php echo form_error('no_polisi') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Harga*</label>
								<input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
								 type="text" name="harga" placeholder="harga" />
								<div class="invalid-feedback">
									<?php echo form_error('harga') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Status*</label>
								<input class="form-control <?php echo form_error('status') ? 'is-invalid':'' ?>"
								 type="text" name="status" placeholder="status" />
								<div class="invalid-feedback">
									<?php echo form_error('status') ?>
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
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>