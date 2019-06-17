<html>
<head>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'/assets/vendor/bootstrap/css/bootstrap.min.css'?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url().'/assets/dist/css/template.css'?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url().'/assets/vendor/font-awesome/css/font-awesome.min.css'?>" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <!-- header -->
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url().'home/c_home' ?>dashboard/index_admin.php"><b>RENTAL MOBIL</b></a>
    </div>
        <!-- sidebar -->
    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
				<li>
				    <center><img src="<?php echo base_url().'/assets/gambar/LOGO E-RENT FIX.jpg'?>" class="img-responsive" width="100%"><span class="masked"> </span></center>
				</li>
				<li>
                    <a href="<?php echo base_url().'home/c_home'?>"><i class="fa fa-dashboard fa-fw"></i><span class="masked"> Home </span></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'admin/c_admin'?>"><i class="fa fa-user fa-fw"></i><span class="masked"> Admin </span></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'mobil/c_mobil'?>"><i class="fa fa-car fa-fw"></i><span class="masked"> Mobil </span></a>
                </li>
				<li>
                    <a href="<?php echo base_url().'pelanggan/c_pelanggan'?>"><i class="fa fa-users fa-fw"></i><span class="masked"> Pelanggan </span></a>
                </li>
				<li>
                    <a href="#"><i class="fa fa-file fa-fw"></i> Transaksi <span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
                        <li>
                            <a href="<?php echo base_url().'transaksibiaya/c_transaksi_biaya'?>">Transaksi Biaya</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'pembayaran/c_pembayaran'?>">Pembayaraan</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url().'pengembalian/c_pengembalian'?>">Pengembalian</a>
                        </li>
                    </ul> 
                </li>
                <li>
                    <a href="<?php echo base_url().'backup/c_backup'?>"><i class="fa fa-user fa-fw"></i><span class="masked"> Backup </span></a>
                </li>
                <li>
                    <a href="<?php echo base_url().'restore/c_restore'?>"><i class="fa fa-user fa-fw"></i><span class="masked"> Restore </span></a>
                </li>
                <li>
                     <a class="btn btn-default btn-outline" href="<?php echo base_url().'auth'?>"> LOGOUT </span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- jQuery -->
    <script src="<?php echo base_url().'/assets/vendor/jquery/jquery.min.js'?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'/assets/vendor/bootstrap/js/bootstrap.min.js'?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'/assets/dist/js/template.js'?>"></script>
</body>
</html>