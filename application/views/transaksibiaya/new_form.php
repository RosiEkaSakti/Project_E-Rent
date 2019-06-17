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
        	<h1 class="page-header">Transaksi Biaya</h1>
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
						<a href="<?php echo site_url('transaksibiaya/c_transaksibiaya/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
					</div>
					<div class="card-body">

						 <form action="<?php base_url('transaksibiaya/c_transaksibiaya/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name">tgl sewa</label>
                                <input class="form-control <?php echo form_error('tgl_sewa') ? 'is-invalid':'' ?>"
                                 type="number" name="tgl_sewa" placeholder="tgl_sewa"  />
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
                                 type="tetxt" name="no_ktp" placeholder="no_ktp"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">nama lengkap</label>
                                <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_lengkap" placeholder="nama_lengkap" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>
                            </div>

                             <div class="form-group">
                                <label for="name">harga</label>
                                <input class="form-control <?php echo form_error('harga') ? 'is-invalid':'' ?>"
                                 type="number" name="harga" placeholder="harga"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_harga') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">jumlah harga</label>
                                <input class="form-control <?php echo form_error('jumlah_harga') ? 'is-invalid':'' ?>"
                                 type="text" name="jumlah_harga" placeholder="jumlah_harga" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">denda</label>
                                <input class="form-control <?php echo form_error('denda') ? 'is-invalid':'' ?>"
                                 type="text" name="denda" placeholder="denda" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('denda') ?>
                                </div>
                                <div class="form-group">
                                <label for="name">total harga</label>
                                <input class="form-control <?php echo form_error('total_harga') ? 'is-invalid':'' ?>"
                                 type="text" name="total_harga" placeholder="total_harga"/>
                                <div class="invalid-feedback">
                                    <?php echo form_error('total_harga') ?>
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