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
        	<h1 class="page-header">Pengembalian</h1>
			<ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Admin E-RENT
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
						<a href="<?php echo site_url('pengembalian/c_pengembalian/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('Pengembalian/c_pengembalian/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">id pengembalian</label>
								<input class="form-control <?php echo form_error('id_pengembalian') ? 'is-invalid':'' ?>"
								 type="number" name="id_pengembalian" placeholder="id_pengembalian" />
								<div class="invalid-feedback">
									<?php echo form_error('id_pengembalian') ?>
								</div>
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