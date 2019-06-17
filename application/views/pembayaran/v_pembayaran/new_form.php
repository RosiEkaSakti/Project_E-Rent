<html>
<!DOCTYPE html>
<html lang="en">

	<title>Tambah data Pembayaran</title>

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
						<a href="<?php echo site_url('pembayaran/c_pembayaran/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						 <form action="<?php base_url('pembayaran/c_pembayaran/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name">Id Pembayaran*</label>
                                <input class="form-control <?php echo form_error('id_bayar') ? 'is-invalid':'' ?>"
                                 type="number" name="id_bayar" placeholder="id_bayar" value="<?= $v_pembayaran->id_bayar ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_bayar') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Id Transaksi</label>
                                <input class="form-control <?php echo form_error('id_transaksi') ? 'is-invalid':'' ?>"
                                 type="text" name="id_transaksi" min="0" placeholder="id_transaksi" value="<?= $v_pembayaran->id_transaksi ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_transaksi') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Tanggal Bayar*</label>
                                <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid':'' ?>"
                                 type="date" name="tgl_bayar" placeholder="tgl_bayar" value="<?= $v_pembayaran->tgl_bayar ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tgl_bayar') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Pembayaran*</label>
                                <input class="form-control <?php echo form_error('pembayaran') ? 'is-invalid':'' ?>"
                                 type="text" name="pembayaran" placeholder="pembayaran" value="<?= $v_pembayaran->pembayaran ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('pembayaran') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nomor Rekening*</label>
                                <input class="form-control <?php echo form_error('no_rek') ? 'is-invalid':'' ?>"
                                 type="text" name="no_rek" placeholder="no_rek" value="<?= $v_pembayaran->no_rek ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_rek') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Bank*</label>
                                <input class="form-control <?php echo form_error('nama_bank') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_bank" placeholder="nama_bank" value="<?= $v_pembayaran->nama_bank ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_bank') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Atas Nama*</label>
                                <input class="form-control <?php echo form_error('atas_nama') ? 'is-invalid':'' ?>"
                                 type="text" name="atas_nama" placeholder="atas_nama" value="<?= $v_pembayaran->atas_nama ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('atas_nama') ?>
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
