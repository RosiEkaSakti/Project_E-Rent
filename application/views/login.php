<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>

	<title>Login</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/dist/css/template.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><center>
                            <b>E-RENT</b><center></h3>
                    </div>
                    <div class="panel-body" style="background-color: #30467f;">
						<center>
						<img src="assets/gambar/LOGO E-RENT FIX.jpg" class="img-responsive"/>
						<center>
						<br>
                        <form method="post" action="<?= base_url().'auth/login'?>"  role="form">
						<?php 
						if(isset($error)){
							
								echo "<div style='margin-bottom:5px' class='alert alert-danger alert-dismissable' role='alert'><span class='glyphicon glyphicon-warning-sign'></span><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>  Username dan Password Salah !!</div>";
							
						}
						?>
                            <fieldset>
								<div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
                                </div>
                                <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input class="form-control" placeholder="Password" id="password" name="password" type="password" required="">
                                </div>
								                              
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block"><i class="fa fa-hand-o-right"></i> Login <i class="fa fa-hand-o-left"></i></button>


                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ?>assets/dist/js/template.js"></script>

</body>

</html>