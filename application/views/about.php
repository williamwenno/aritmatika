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
          	<div class="row"><div class="col-sm-8"><h3><i class="fa fa-angle-right"></i> About</h3></div><div class="col-sm-4 text-right"><?php echo date('d/m/Y') ?></div></div>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<p><img src="<?php echo base_url('assets/principal.jpg') ?>" style="float: left; padding: 15px; padding-top: 0px;" ><h4>Sambutan Kepala Dinas Pendidikan</h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce orci neque, lobortis rhoncus turpis non, auctor placerat neque. Aliquam fermentum odio augue, eget imperdiet nisi porta in. Phasellus et interdum tortor. Aenean feugiat, nibh eget pulvinar elementum, nisi augue consectetur mauris, sit amet vestibulum arcu sapien accumsan dui. Curabitur commodo diam ut tellus viverra varius. Maecenas sagittis libero eu rhoncus sollicitudin. In lacinia accumsan fringilla. Cras iaculis congue consectetur.

<p>Aliquam erat volutpat. Fusce commodo purus consectetur sem molestie, vel vulputate dolor dignissim. Vestibulum viverra diam eget sagittis rutrum. Cras nulla lectus, consequat ut tempus a, ornare quis dui. Vivamus a pulvinar nunc. Etiam eros ligula, consectetur sed malesuada sed, sagittis vel nisi. Donec vel diam nulla. Aenean suscipit, est sagittis volutpat tempus, velit dui accumsan ante, eu sollicitudin eros metus vel tortor. Maecenas vel dapibus risus. Fusce varius sodales nisl, nec viverra diam iaculis vitae. Pellentesque at lacus dui. Nullam vel nibh vitae arcu gravida pellentesque.

<p>Donec eu sollicitudin nulla. Etiam dignissim, est at ornare eleifend, leo dolor luctus purus, eget semper ligula neque vitae ante. Vivamus condimentum enim mi, rutrum aliquam leo molestie vitae. Nam id convallis libero. Nunc sit amet neque felis. Nam efficitur ipsum cursus orci tempus sodales. Fusce placerat, tellus nec porta rutrum, urna felis cursus est, non mattis ipsum nisl non justo. Ut gravida, magna at vestibulum cursus, purus ante rutrum nibh, sit amet tempor orci sem consequat nulla. Nam vitae nisl porta, eleifend eros eget, pharetra est. Morbi blandit, tortor eget malesuada pretium, diam nunc pulvinar erat, nec dictum enim ligula at justo. Duis nec ex sem. Pellentesque augue ipsum, faucibus at nisl nec, semper malesuada enim. Sed vulputate nibh in nunc ornare aliquet.

<p>Etiam vel lacus ut justo posuere iaculis. Cras imperdiet diam at ante imperdiet tristique. Sed quis ipsum diam. Donec et rutrum est. Morbi fringilla aliquet nulla id condimentum. Nunc pharetra imperdiet sapien, et vehicula risus imperdiet vel. In vitae egestas dui. Donec finibus ultricies sodales. Proin non lacus in dui mattis pellentesque a in turpis. Integer ac sodales ante, ut molestie quam.

<p>Mauris varius congue velit mattis sollicitudin. Ut ut lorem et risus laoreet porttitor sit amet et lacus. Donec eu urna at turpis egestas molestie. Duis blandit erat vel mauris ullamcorper consequat. In egestas diam augue, eget laoreet felis rutrum ac. Curabitur id euismod tellus. Vivamus interdum ex urna, eu finibus ante elementum sit amet.</p>
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
