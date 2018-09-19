<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/admin') ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="<?php echo base_url('index.php/C_public/login_proses') ?>" method="post">
		        
		        <div class="login-wrap">
		        
		        <div class="text-center">
		        	<img width="135px" src="<?php echo base_url('assets/img/tidore.png') ?>">
		        	<h4>APLIKASI<BR>MONITORING INVENTARIS SEKOLAH</h4>
		        </div>
		        <hr>
		            <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
		            <br>
		            <input type="password" name="password" class="form-control" placeholder="Password"><br>
		            <select name="level" class="form-control">
		            	<option value="1">Admin</option>
		            	<option value="2">User/Sekolah</option>
		            </select>
		           <br>
		            <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> Login</button>
		            
		            
		            
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?php echo base_url('assets/admin') ?>/assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
