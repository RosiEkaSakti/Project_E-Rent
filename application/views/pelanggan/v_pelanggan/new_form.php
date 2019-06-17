<<<<<<< HEAD
<html>
<!DOCTYPE html>
<html lang="en">

	<title>Tambah data Pelanggan</title>

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
						<a href="<?php echo site_url('pelanggan/c_pelanggan/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						 <form action="<?php base_url('pelanggan/c_pelanggan/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name">No*</label>
                                <input class="form-control <?php echo form_error('id_pelanggan') ? 'is-invalid':'' ?>"
                                 type="number" name="id_pelanggan" placeholder="id_pelanggan" value="<?= $v_pelanggan->id_pelanggan ?>">
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">No KTP</label>
                                <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
                                 type="file" name="no_ktp" min="0" placeholder="no_ktp" value="<?= $v_pelanggan->no_ktp ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Foto Pelanggan*</label>
                                <input class="form-control <?php echo form_error('foto_pelanggan') ? 'is-invalid':'' ?>"
                                 type="tetxt" name="foto_pelanggan" placeholder="foto_pelanggan" value="<?= $v_pelanggan->foto_pelanggan ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('foto_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_lengkap" placeholder="nama_lengkap"value="<?= $v_pelanggan->nama_lengkap ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
                                 type="text" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?= $v_pelanggan->tanggal_lahir ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Jenis Kelamin*</label>
                                <input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
                                 type="text" name="jenis_kelamin" placeholder="jenis_kelamin" value="<?= $v_pelanggan->jenis_kelamin ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                 type="text" name="username" placeholder="username" value="<?= $v_pelanggan->username ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Password*</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                 type="text" name="password" placeholder="password" value="<?= $v_pelanggan->password ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Alamat Pelanggan*</label>
                                <input class="form-control <?php echo form_error('alamat_pelanggan') ? 'is-invalid':'' ?>"
                                 type="text" name="alamat_pelanggan" placeholder="alamat_pelanggan" value="<?= $v_pelanggan->alamat_pelanggan ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">No Telepon*</label>
                                <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                                 type="text" name="no_telepon" placeholder="no_telepon" value="<?= $v_pelanggan->no_telepon ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">E-mail*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                 type="text" name="email" placeholder="email" value="<?= $v_pelanggan->email ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Status Peminjaman*</label>
                                <input class="form-control <?php echo form_error('status_peminjaman') ? 'is-invalid':'' ?>"
                                 type="text" name="status_peminjaman" placeholder="status_peminjaman" value="<?= $v_pelanggan->status_peminjaman ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('status_peminjaman') ?>
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
