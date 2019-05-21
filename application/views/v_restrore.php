<!DOCTYPE html>
<head><title>Home</title>
<body>

<div id="wrapper">

        <!-- Navigation -->
        <?php $this->load->view($sidebar) ;
        ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">RESTORE</h1>
                    <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-circle-o-right"></i> Admin
                            </li>
                            <li class="active">
                                Restore
                            </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="restore">
                <form action="restore.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="" class="col-sm-9 col-sm-offset-3">Nama Database</label>
                            <div class="col-sm-9">
                                <input class="form-control"  name="dbname" placeholder="" type="text" required>
                            </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-sm-9 col-sm-offset-3">Input File</label>
                            <div class="col-sm-9">
                                <input   name="filename"  type="file" >
                            </div>
                    </div>
                        <button type="submit" class="btn btn-primary" name="restore">Restore</button>
                </form>
            </div>
            
        <!-- /#page-wrapper -->

    </div>
</body>
</html>
