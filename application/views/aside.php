<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo base_url('') ?>/assets/img/tidore.png" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Kota Tidore</h5>
              	  	
                  <li class="mt">
                      <a class="<?php if($menu == 'home') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login') ?>">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  </li>
                  <li >
                      <a class="<?php if($menu == 'user') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login/user') ?>">
                          <i class="fa fa-user"></i>
                          <span>User</span>
                      </a>
                  </li>
                  <li>
                      <a class="<?php if($menu == 'pengadaan') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login/form_pengadaan') ?>">
                          <i class="fa fa-cubes"></i>
                          <span>Pengadaan</span>
                      </a>
                  </li>
                  

                  <li class="sub-menu">
                      <a class="<?php if($menu == 'inventaris') {echo 'active';} ?>" href="javascript:;" >
                          <i class="fa fa-archive"></i>
                          <span>Inventaris</span>
                      </a>
                      <ul class="sub">
                          <li ><a  href="<?php echo base_url('index.php/C_login/mesin') ?>">Peralatan Mesin</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/gedung') ?>">Gedung Bangunan</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/buku') ?>">Buku Perpustakaan</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/hewan') ?>">Hewan Ternak Tumbuhan</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/seni') ?>">Kesenian Kebudayaan</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/aset') ?>">Aset Tetap</a></li>
                      </ul>
                  </li>

                  <li >
                      <a class="<?php if($menu == 'suplier') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login/suplier') ?>">
                          <i class="fa fa-users"></i>
                          <span>Suplier</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a class="<?php if($menu == 'laporan') {echo 'active';} ?>"  href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Laporan</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo base_url('index.php/C_login/laporan_pengadaan') ?>">Laporan Pengadaan</a></li>
                          <li><a  href="<?php echo base_url('index.php/C_login/laporan_inventaris') ?>">Laporan Inventaris</a></li>
                      </ul>
                  </li>

                  <li >
                      <a href="<?php echo base_url('index.php/C_login/sekolah') ?>">
                          <i class="fa fa-university"></i>
                          <span>Sekolah</span>
                      </a>
                  </li>

                  <li >
                      <a class="<?php if($menu == 'galeri') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login/galeri') ?>">
                          <i class="fa fa-picture-o"></i>
                          <span>Galeri</span>
                      </a>
                  </li>

                  <li >
                      <a class="<?php if($menu == 'about') {echo 'active';} ?>" href="<?php echo base_url('index.php/C_login/about') ?>">
                          <i class="fa fa-info"></i>
                          <span>About</span>
                      </a>
                  </li>

                  

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->