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
            <h1 class="page-header">Admin</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Menambahkan Data Pelanggan
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
                        <a href="<?php echo site_url('pelanggan/c_pelanggan/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
                    </div>
                    <div class="card-body">

                         <form action="<?php base_url('pelanggan/c_pelanggan/add') ?>" method="post" enctype="multipart/form-data" >
                            <div class="form-group">
                                <label for="name">Id Pelanggan*</label>
                                <input class="form-control <?php echo form_error('id_pelanggan') ? 'is-invalid':'' ?>"
                                 type="number" name="id_pelanggan" placeholder="id_pelanggan" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('id_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">No KTP</label>
                                <input class="form-control <?php echo form_error('no_ktp') ? 'is-invalid':'' ?>"
                                 type="text" name="no_ktp" min="0" placeholder="no_ktp" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_ktp') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Foto Pelanggan*</label>
                                <input class="form-control <?php echo form_error('foto_pelanggan') ? 'is-invalid':'' ?>"
                                 type="file" name="foto_pelanggan" placeholder="foto_pelanggan"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('foto_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Nama Lengkap*</label>
                                <input class="form-control <?php echo form_error('nama_lengkap') ? 'is-invalid':'' ?>"
                                 type="text" name="nama_lengkap" placeholder="nama_lengkap" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('nama_lengkap') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Tanggal Lahir*</label>
                                <input class="form-control <?php echo form_error('tanggal_lahir') ? 'is-invalid':'' ?>"
                                 type="date" name="tanggal_lahir" placeholder="tanggal_lahir"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('tanggal_lahir') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Jenis Kelamin*</label>
                                <input class="form-control <?php echo form_error('jenis_kelamin') ? 'is-invalid':'' ?>"
                                 type="text" name="jenis_kelamin" placeholder="jenis_kelamin"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('jenis_kelamin') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                 type="text" name="username" placeholder="username"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Password*</label>
                                <input class="form-control <?php echo form_error('password') ? 'is-invalid':'' ?>"
                                 type="text" name="password" placeholder="password"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('password') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Alamat Pelanggan*</label>
                                <input class="form-control <?php echo form_error('alamat_pelanggan') ? 'is-invalid':'' ?>"
                                 type="text" name="alamat_pelanggan" placeholder="alamat_pelanggan"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('alamat_pelanggan') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">No Telepon*</label>
                                <input class="form-control <?php echo form_error('no_telepon') ? 'is-invalid':'' ?>"
                                 type="text" name="no_telepon" placeholder="no_telepon"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('no_telepon') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">E-mail*</label>
                                <input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
                                 type="text" name="email" placeholder="email"  />
                                <div class="invalid-feedback">
                                    <?php echo form_error('email') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Status Peminjaman*</label>
                                <input class="form-control <?php echo form_error('status_peminjaman') ? 'is-invalid':'' ?>"
                                 type="text" name="status_peminjaman" placeholder="status_peminjaman"  />
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
    </div>
</div>
<!-- akhir isi -->
</body>
</html>