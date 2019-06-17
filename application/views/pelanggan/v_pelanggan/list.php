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
        <h1 class="page-header">Pelanggan E-RENT</h1>
			<ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Pelanggan E-RENT
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
                          <a href="<?php echo base_url().'pelanggan/c_pelanggan/add'?> ">
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
                                            <th style="width:5px"><center>Id Pelanggan</center></th>
                                            <th style="width:200px"><center>No KTP</center></th>
                                            <th style="width:200px"><center>Foto Pelanggan<center></th>
                                            <th style="width:200px"><center>Nama Lengkap<center></th>
                                            <th style="width:200px"><center>Tanggal Lahir<center></th>
                                            <th style="width:200px"><center>Jenis Kelamin<center></th>    
                                            <th style="width:200px"><center>Username<center></th>  
                                            <th style="width:200px"><center>Password<center></th>   
                                            <th style="width:200px"><center>Alamat Pelanggan<center></th>   
                                            <th style="width:200px"><center>No Telepon<center></th>   
                                            <th style="width:200px"><center>Email<center></th>   
                                            <th style="width:200px"><center>Status Peminjaman<center></th>             
                                            <th style="width:30px"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach ($data as $v_pelanggan): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $v_pelanggan->id_pelanggan ?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->no_ktp?>
                                        </td>
                                        <td>
                                            <img src="<?php echo base_url('upload/v_pelanggan/'.$v_pelanggan->foto_pelanggan) ?>" width="64" />
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->nama_lengkap?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->tanggal_lahir?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->jenis_kelamin?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->username?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->password?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->alamat_pelanggan?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->no_telepon?>
                                        </td>
                                        <td>
                                            <?php echo $v_pelanggan->email?>
                                        </td>
                                        <td class="small">
                                            <?php echo $v_pelanggan->status_peminjaman?></td>
                                        <td width="250">
                                            <a href="<?php echo site_url('pelanggan/c_pelanggan/edit/'.$v_pelanggan->id_pelanggan) ?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('pelanggan/c_pelanggan/delete/'.$v_pelanggan->id_pelanggan) ?>')"
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