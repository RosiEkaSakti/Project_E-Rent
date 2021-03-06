<html>
<head><title></title></head>    
<body>
<!-- include sidebar -->
<div class="wrapper">
   <?php $this->load->view($sidebar) ?>    
</div>
<!-- penutup include sidebar -->
<!-- awal isi -->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        	<h1 class="page-header">Mobil</h1>
			<ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Tambah Mobil
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
            <!-- <div class="row">
				<div class="col-md-12">
					<div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        1. Icon <i class="fa fa-plus-circle"></i> berfungsi sebagai menambah data user <br>
						2. Icon <i class="fa fa-edit"></i> berfungsi untuk mengedit data user yang dipilih <br>
						2. Icon <i class="fa fa-trash"></i> berfungsi untuk menghapus data user yang dipilih
					</div>
				</div>
			</div> -->
		<!-- </div> -->
		<div class="container-fluid">

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('mobil/c_mobil/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('mobil/c_mobil/add') ?>" method="post" enctype="multipart/form-data" >

							<div class="form-group">
								<label for="name">Foto Mobil</label>
								<input class="form-control <?php echo form_error('foto_mobil') ? 'is-invalid':'' ?>"
								 type="file" name="image" min="0" placeholder="foto_mobil" />
								<div class="invalid-feedback">
									<?php echo form_error('foto_mobil') ?>
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
								<label for="name">Jenis*</label>
								<select name="id_jenis" class="form-control">
									<option value="">--Pilih Jenis--</option>
									<?php
									foreach ($jenis as $key => $value) {
									?>
									<option value="<?=$value['id_jenis']?>"><?=$value['nama_jenis']?></option>
									<?php
									}
									?>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('id_jenis') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Merk Mobil*</label>
								<input class="form-control <?php echo form_error('merk') ? 'is-invalid':'' ?>"
								 type="text" name="merk" placeholder="merk_mobil" />
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
								<label for="name">Warna*</label>
								<input class="form-control <?php echo form_error('warna') ? 'is-invalid':'' ?>"
								 type="text" name="warna" placeholder="warna" />
								<div class="invalid-feedback">
									<?php echo form_error('warna') ?>
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
	</div>
</div>
<!-- akhir isi -->
</body>
</html>