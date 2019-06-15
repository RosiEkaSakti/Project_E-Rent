<html>
<head><title></title>
</head>    
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
        <h1 class="page-header">Admin E-RENT</h1>
			<ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Admin E-RENT
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
						<button href="<?php echo base_url().'admin/v_admin/new_form'?> "data-toggle="modal" data-target="new_form" class="btn btn-success btn-sm"><span class="fas fa-plus"></span> Tambah Data Admin</button></div>
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
                                            <th style="width:200px"><center>Username</center></th>
                                            <th style="width:200px"><center>Password<center></th>
											<th style="width:30px"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach ($data as $v_admin): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $no; ?>
                                        </td>
                                        <td>
                                            <?php echo $v_admin->username?>
                                        </td>
                                        <td class="small">
                                            <?php echo $v_admin->password?></td>
                                        <td width="250">
                                            <a href="<?php echo site_url('admin/c_admin/edit/'.$v_admin->id_user) ?>"
                                             class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('admin/c_admin/delete/'.$v_admin->id_user) ?>')"
                                             href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
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