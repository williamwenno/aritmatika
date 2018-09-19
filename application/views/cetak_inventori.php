<head>
  <link href="<?php echo base_url() ?>assets/style_print.css" rel="stylesheet" media="print">
      <link href="<?php echo base_url('assets/admin') ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/admin') ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/style.css" rel="stylesheet">
</head>
<body>
  <section>
    <header>
      <h2 style="text-align: center;">Laporan Pengadaan</h2>
    </header>
    <table class="table">
                              <thead>
                              <tr>
                                  <?php foreach($kolom as $k) { ?>
                                  <td><?php echo $k ?></td>
                                  <?php } ?>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($isi as $i) {  ?> 
                              <tr>
                               <?php foreach($kolom as $ko) { ?>
                                  <td><?php echo $i[$ko] ?></td>
                                  <?php } ?>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
  </section>
</body>
<script type="text/javascript">
  window.print();
</script>