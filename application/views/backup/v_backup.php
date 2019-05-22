<html>
<head><title>HOME</title></head>    
<body>

<div class="wrapper">
   <?php $this->load->view($sidebar) ?>    
</div>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BACKUP</h1>
					<ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-arrow-circle-o-right"></i> Admin
							</li>
							<li class="active">
                                Backup
                            </li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           
            <h3>Backup Database</h3>
                        
                <div class="backup">
                    <form action="backup.php" method="post">
                        <div class="form-group">
                            <label for="" class="col-sm-9 col-sm-offset-3">Nama Database</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="dbname" placeholder="" type="text" required>
                                </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-9 col-sm-offset-3">Database.sql</label>
                                <div class="col-sm-9">
                                    <input class="form-control"  name="filename" placeholder="" type="text" required>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="backup">Backup</button>
                    </form>
                </div> 
    </body>
</html>            