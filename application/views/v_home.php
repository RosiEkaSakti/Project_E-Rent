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
                <h1 class="page-header">HOME</h1>
			    <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-arrow-circle-o-right"></i> Home E-RENT
                    </li>
                </ol>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

		<div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-car fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div>Jumlah Mobil</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'c_mobil'?>">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Selengkapnya</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>

        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user-plus fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div>Total Pelanggan</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'c_pelanggan'?>">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Selengkapnya</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>

        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div>Jumlah User Admin</div>
                    </div>
                </div>
            </div>
            <a href="<?php echo base_url().'c_admin'?>">
                <div class="panel-footer">
                    <span class="pull-left">Lihat Selengkapnya</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    <!-- /.row -->
    <div class="row"></div>
    <!-- /.row -->
    <!-- /#page-wrapper -->
    </div>
</div>
<!-- akhir isi -->
</body>
</html>