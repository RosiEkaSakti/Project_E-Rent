<html>
<head><title></title></head>    
<body>
<!-- include sidebar -->
<div class="wrapper">
   <?php $this->load->view('v_sidebar') ?>    
</div>
<!-- penutup include sidebar -->
<!-- awal isi -->
<div>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Mobil E-RENT</h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Mobil E-RENT
                </li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-info alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        1. Icon <i class="fa fa-plus-circle"></i> berfungsi sebagai menambah data user <br>
                        2. Icon <i class="fa fa-edit"></i> berfungsi untuk mengedit data user yang dipilih <br>
                        2. Icon <i class="fa fa-trash"></i> berfungsi untuk menghapus data user yang dipilih
                    </div>
                </div>
            </div>
             <div class="panel panel-primary">
               
                        <div class="panel-heading">
                          <a href="<?php echo base_url().'mobil/c_mobil/add'?> ">
                            <button data-toggle="modal" data-target="new_form" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah Data Mobil</button>
                          </a>
                        </div>
                        <div class="panel-body">
                            <div class="col-lg-8">
                                <!--muncul jika ada pencarian (tombol reset pencarian)-->
                                <a class="btn btn-default btn-outline" href="<?php echo base_url().'home/c_home'?>"> Kembali </a>
                            </div>
                            <div>
                                <form method="post" action="">
                                    <div class="form-group input-group">
                                        <input type="text" name="keyword" class="form-control" placeholder="Search Username...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Cari Username
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                            <br><br>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width:5px"><center>No</center></th>
                                            <th style="width:200px"><center>Foto Mobil</center></th>
                                            <th style="width:200px"><center>Id Jenis<center></th>
                                            <th style="width:200px"><center>Type Mobil<center></th>
                                            <th style="width:200px"><center>Merk Mobil<center></th>
                                            <th style="width:200px"><center>No Polisi<center></th>
                                            <th style="width:200px"><center>Harga<center></th>
                                            <th style="width:200px"><center>Status<center></th>    
                                            <th style="width:30px"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach ($data as $v_mobil): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $no; ?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/v_mobil/'.$v_mobil->foto_mobil) ?>" width="64" />
                                        </td>
                                        <td>
                                            <?php echo $v_mobil->id_jenis?>
                                        </td>
                                        <td>
                                            <?php echo $v_mobil->type_mobil?>
                                        </td>
                                        <td>
                                            <?php echo $v_mobil->merk?>
                                        </td>
                                        <td>
                                            <?php echo $v_mobil->no_polisi?>
                                        </td>
                                        <td>
                                            <?php echo $v_mobil->harga?>
                                        </td>
                                        <td class="small">
                                            <?php echo $v_mobil->status?></td>
                                        <td width="250">
                                            <a href="<?php echo site_url('mobil/c_mobil/edit/'.$v_mobil->id_mobil) ?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('mobil/c_mobil/delete/'.$v_mobil->id_mobil) ?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                      <?php 
                                        $no++;
                                    endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                    </div>
                </div>
            </div>
        </div>                  
    </div>
</div>
<!-- akhir isi -->
</body>
</html>