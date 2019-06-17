<html>
<head><title></title></head>    
<body>
<!-- include sidebar -->
<div class="wrapper">
   <?php $this->load->view($sidebar) ?>    
</div>
<!-- penutup include sidebar -->
<!-- awal isi -->
<div>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
        <h1 class="page-header">Transaksi Biaya E-RENT</h1>
			<ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-arrow-circle-o-right"></i> Transaksi Biaya E-RENT
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
                          <a href="<?php echo base_url().'transaksibiaya/c_transaksi_biaya/add'?> ">
                            <button data-toggle="modal" data-target="new_form" class="btn btn-success btn-sm"><span class="fa fa-plus"></span> Tambah Data Transaksi</button>
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
                                            <th style="width:5px"><center>Id Transaksi</center></th>
                                            <th style="width:200px"><center>Id Mobil</center></th>
                                            <th style="width:200px"><center>Harga<center></th>
                                            <th style="width:200px"><center>Id Pelanggan<center></th>
                                            <th style="width:200px"><center>Nama Lengkap<center></th>
                                            <th style="width:200px"><center>Tanggal Sewa<center></th>    
                                            <th style="width:200px"><center>Tanggal Selesai Sewa<center></th>  
                                            <th style="width:200px"><center>Jumlah Harga<center></th>   
                                            <th style="width:200px"><center>Denda<center></th>   
                                            <th style="width:200px"><center>Status Pembayaran<center></th>   
                                            <th style="width:200px"><center>Status Pengembalian<center></th>              
                                            <th style="width:30px"><center>Opsi</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no =1;
                                        foreach ($data as $v_tranksaksi_biaya): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $v_tranksaksi_biaya->id_transaksi?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->id_mobil?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->harga?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->id_pelanggan?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->nama_lengkap?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->tgl_sewa?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->tgl_selesaisewa?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->jumlah_harga?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->denda?>
                                        </td>
                                        <td>
                                            <?php echo $v_tranksaksi_biaya->status_pembayaran?>
                                        </td>
                                         <td>
                                            <?php echo $v_tranksaksi_biaya->status_pengembalian?>
                                        </td>
                                       
                                        <td width="250">
                                            <a href="<?php echo site_url('transaksi/c_transaski/edit/'.$v_tranksaksi_biaya->id_transaksi) ?>"
                                             class="btn btn-small"><i class="fa fa-edit"></i> Edit</a>
                                            <a onclick="deleteConfirm('<?php echo site_url('transaksi/c_transaski/delete/'.$v_tranksaksi_biaya->id_transaksi) ?>')"
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