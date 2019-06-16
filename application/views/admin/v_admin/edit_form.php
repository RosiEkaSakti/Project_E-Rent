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
                    <i class="fa fa-arrow-circle-o-right"></i>Edit Admin E-RENT
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
                        <a href="<?php echo site_url('admin/c_admin/') ?>"> <button class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</button> </a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url('admin/c_admin/edit') ?>" method="post" enctype="multipart/form-data" >
                            <input type="hidden" name="id" value="<?= $v_admin->id_user ?>">
                            <div class="form-group">
                                <label for="name">Username*</label>
                                <input class="form-control <?php echo form_error('username') ? 'is-invalid':'' ?>"
                                 type="text" name="username" placeholder="username" value="<?= $v_admin->username ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('username') ?>
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