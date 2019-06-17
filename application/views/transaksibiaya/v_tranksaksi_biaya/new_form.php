<html>
<!DOCTYPE html>
<html lang="en">

	<title>Tambah data Transaksi</title>

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
						<a href="<?php echo site_url('transaksibiaya/c_transaksibiaya/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('transaksibiaya/v_transaksibiaya/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">tgl sewa</label>
								<input class="form-control <?php echo form_error('tgl_sewa') ? 'is-invalid':'' ?>"
								 type="number" name="tgl_sewa" placeholder="tgl_sewa" />
								<div class="invalid-feedback">
									<?php echo form_error('id_transaksibiaya') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">id mobil</label>
								<input class="form-control <?php echo form_error('id_mobil') ? 'is-invalid':'' ?>"
								 type="file" name="id_mobil" min="0" placeholder="id_mobil" />
								<div class="invalid-feedback">
									<?php echo form_error('id_transaksibiaya') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">no ktp</label>
								<input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
								 type="tetxt" name="no_ktp" placeholder="no_ktp" />
								<div class="invalid-feedback">
									<?php echo form_error('id_transaksibiaya') ?>
								</div>
							</div>

								 <div class="form-group">
                                <label for="name">nama lengkap</label>
                                <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_lengkap" placeholder="nama_lengkap"value="<?= $v_transaksibiaya->nama_lengkap?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksibiaya') ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="name">harga</label>
                                <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
                                 type="number" name="harga" placeholder="harga" value="<?= $v_transaksibiaya->id_harga ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksibiaya') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">jumlah harga</label>
                                <input class="form-control <?php echo form_error('jumlah_harga') ? 'is-invalid':'' ?>"
                                 type="text" name="jumlah_harga" placeholder="jumlah_harga"value="<?= $v_transaksibiaya->jumlah_harga?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksibiaya') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">denda</label>
                                <input class="form-control <?php echo form_error('denda') ? 'is-invalid':'' ?>"
                                 type="text" name="denda" placeholder="denda"value="<?= $v_transaksibiaya->denda?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksibiaya') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">total harga</label>
                                <input class="form-control <?php echo form_error('total_harga') ? 'is-invalid':'' ?>"
                                 type="text" name="total_harga" placeholder="total_harga"value="<?= $v_transaksibiaya->total_harga?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksibiaya') ?>
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
				<?php $this->load->view("transaksibiaya/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->


		<?php $this->load->view("transaksibiaya/_partials/scrolltop.php") ?>

		<?php $this->load->view("transaksibiaya/_partials/js.php") ?>

</body>

</html>