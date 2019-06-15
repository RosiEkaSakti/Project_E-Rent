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
            <div class="row">s
                <div class="col-lg-12">
                    <h1 class="page-header">MOBIL</h1>
					<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-circle-o-right"></i> Mobil
                            </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
</div>            
            <!-- /.row -->

 </body>

 <table border="1">
        <tr>
            <th>Tambah</th>
            <th>Delete</th>
        </tr>
        <?php foreach($user as $u){ ?>
        <tr>
            <td><?php echo $u->Tambah ?></td>
            <td><?php echo $u->Delete ?></td>
        </tr>
        <?php } ?>
    </table>
</html>           