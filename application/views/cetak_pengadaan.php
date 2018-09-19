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
                                  <th>#</th>
                                  <th>Jenis Pengadaan</th>
                                  <th>Tahun Pengadaan</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach($pengadaan as $p) {  ?> 
                              <tr>
                                <td><?php echo $p['id_pengadaan'] ?></td>
                                <td><?php echo $p['jenis'] ?></td>
                                <td><?php echo $p['tahun'] ?></td>
                              </tr>
                              <?php } ?>
                              </tbody>
                          </table>
  </section>
</body>
<script type="text/javascript">
  window.print();
</script>