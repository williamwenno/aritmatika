<!DOCTYPE html>
<html>
<head>
	<!-- Judul -->
	<title>Perhitungan Aritmatika</title>
	 <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/admin') ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
    <!-- CSS Template -->
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin') ?>/assets/css/style-responsive.css" rel="stylesheet">
</head>
<body>
	<!-- Mulai Konten -->
  <audio id="satu" src="<?php echo base_url('assets/audio/new/1.MP3') ?>"></audio>
  <audio id="dua" src="<?php echo base_url('assets/audio/new/2.MP3') ?>"></audio>
  <audio id="tiga" src="<?php echo base_url('assets/audio/new/3.MP3') ?>"></audio>
  <audio id="empat" src="<?php echo base_url('assets/audio/new/4.MP3') ?>"></audio>
  <audio id="lima" src="<?php echo base_url('assets/audio/new/5.MP3') ?>"></audio>
  <audio id="enam" src="<?php echo base_url('assets/audio/new/6.MP3') ?>"></audio>
  <audio id="tujuh" src="<?php echo base_url('assets/audio/new/7.MP3') ?>"></audio>
  <audio id="delapan" src="<?php echo base_url('assets/audio/new/8.MP3') ?>"></audio>
  <audio id="sembilan" src="<?php echo base_url('assets/audio/new/9.MP3') ?>"></audio>
  <audio id="sepuluh" src="<?php echo base_url('assets/audio/new/sepuluh.MP3') ?>"></audio>
  <audio id="sebelas" src="<?php echo base_url('assets/audio/new/sebelas.MP3') ?>"></audio>
  <audio id="puluh" src="<?php echo base_url('assets/audio/new/puluh.MP3') ?>"></audio>
  <audio id="ratus" src="<?php echo base_url('assets/audio/new/ratus.MP3') ?>"></audio>
  <audio id="ribu" src="<?php echo base_url('assets/audio/new/ribu.MP3') ?>"></audio>
  <audio id="seratus" src="<?php echo base_url('assets/audio/new/seratus.MP3') ?>"></audio>
  <audio id="belas" src="<?php echo base_url('assets/audio/new/belas.MP3') ?>"></audio>
	<section id="container">
	
		<div class="form-panel">
      <h4 class="mb"><a href="<?php echo base_url() ?>">Kembali</a></h4>

      <!-- Menampilkan Hasil Aritmatika -->
      <h4>Hasil = <?php echo $hasil ?></h4>
      <!-- Menampilkan Hasil Terbilang -->
      <h5>Terbilang: <?php echo $terbilang ?></h5>

      <?php 
      //menggunkana str_word_count untuk mendefenisikan jumlah kata dari terbilang
      $kata = str_word_count($terbilang, 1);
      $x = 0;
      foreach ($kata as $k) { ?>
          <!-- menggunakan input untuk menyimpan nilai terbilang, untuk dapat diakses javascript  -->
         <input type="hidden" id="kata<?php echo $x ?>" value="<?php echo $k ?>">
       <?php $x++; } ?>
      <input type="hidden" id="jml" value="<?php echo count($kata) ?>">
      <!-- Tombol untuk suara -->
      <br><button id="suara" class="btn btn-primary"><i class="fa fa-volume-up" aria-hidden="true"></i> Suara</button>
    </div>

	

	<!-- Akhir dari Konten -->
	</section>
	<!-- Jquery JS -->
	<script src="<?php echo base_url('assets/admin') ?>/assets/js/jquery.js"></script>
	<!-- Javascript dari Bootstrap -->
    <script src="<?php echo base_url('assets/admin') ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

    $("#suara").click(function(){
       var jml= $("#jml").val() ;
       
     
      for(var i=0;i<jml;i++) {
        
        var kata= $("#kata"+i).val() ;
        //menggunakan setTimeout agar ada jeda antar kata-kata terbilang
        setTimeout(suara, 800*i, kata);
        console.log(kata);
      } 

      //fungsi suara terbilang
      function suara(kata) {
        $("#"+kata).get(0).play();
      }

    });
});
    </script>
</body>
</html>