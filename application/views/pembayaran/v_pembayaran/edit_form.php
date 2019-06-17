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
            <h1 class="page-header">Pembayaran</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i>Edit Pembayaran
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
                        <a href="<?php echo site_url('pembayaran/c_pembayaran/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
                    </div>
                    <div class="card-body">

                       <form action="<?php base_url('pembayaran/c_pembayaran/') ?>" method="post" enctype="multipart/form-data" >
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
    </div>
</div>
<!-- akhir isi -->
</body>
</html>