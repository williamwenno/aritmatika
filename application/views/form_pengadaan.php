<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?php echo $title ?></title>

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

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <?php $this->load->view('header') ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <?php $this->load->view('aside', $menu) ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <div class="row"><div class="col-sm-8"><h3><i class="fa fa-angle-right"></i> Pengadaan</h3></div><div class="col-sm-4 text-right"><?php echo date('d/m/Y') ?></div></div>
            <div class="row mt">
              <div class="col-lg-12">
              <?php if($level != 'user') { ?>
              <p>Halaman ini hanya dapat diakses oleh User</p>
              <?php }  else {?>
              <div class="form-panel">
                      <h4 class="mb"><i class="fa fa-angle-right"></i> Input Pengadaan  </h4>
                      <form class="form-horizontal style-form" method="post" action="<?php echo base_url('index.php/C_login/pengadaan_proses') ?>">
                          
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Pengadaan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="jenis">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tahun Pengadaan</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control" name="tahun">
                              </div>
                          </div>
                          
                         <div class="form-group">
                             
                              <div class="col-sm-10 pull-right">
                                  <input type="submit" class="btn btn-primary" name="Simpan" value="Simpan">&nbsp; &nbsp;
                                  <button class="btn btn-danger">Batal</button>
                              </div>
                          </div>

                          
                      </form>
                  </div>
              <?php } ?>
              </div>
            </div>
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
