<div id="wrapper">

<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="<?php echo base_url()."assets" ?>/img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                        </span> <span class="text-muted text-xs block">Mahasiswa <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="<?php echo base_url()."mahasiswa/home"?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Akun</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                  <li>
                    <a href="<?php echo base_url()."mahasiswa/editprofile"?>">Edit Profil</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url()."mahasiswa/ubahpassword"?>">Ubah Password</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url()."mahasiswa/unduhberkas"?>">Unduh Berkas</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url()."mahasiswa/riwayatlogin"?>">Riwayat Login</a>
                  </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-tasks"></i> <span class="nav-label">KRS</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo base_url()."mahasiswa/registrasi"?>">Registrasi Mata Kuliah</a>
                    </li>
                    <li>
                        <a href="#">Cetak KRS</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Perkuliahan </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="<?php echo base_url()."mahasiswa/kehadiran"?>">Kehadiran</a>
                    </li>
                    <li>
                        <a href="#">Jadwal<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                          <li>
                              <a href="<?php echo base_url()."mahasiswa/jadwalkuliah"?>">Jadwal Kuliah</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url()."mahasiswa/jadwalujian"?>">Jadwal Ujian</a>
                          </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-trophy"></i> <span class="nav-label">Nilai</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">KHS<span class="fa arrow"></span></a>
                        <ul class="nav nav-third-level">
                          <li>
                              <a href="<?php echo base_url()."mahasiswa/nilai"?>">Lihat Nilai</a>
                          </li>
                          <li>
                              <a href="#">Lihat Nilai Semester</a>
                          </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url()."mahasiswa/statistiknilai"?>">Statistik Nilai</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-credit-card"></i> <span class="nav-label">Pembayaran </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <!-- <li><a href="#">Info Pembayaran</a></li> -->
                    <li><a href="<?php echo base_url()."mahasiswa/tagihan"?>">Tagihan</a></li>
                    <li><a href="<?php echo base_url()."mahasiswa/konfirmasipembayaran"?>">Konfirmasi Pembayaran</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Ticketing </span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?php echo base_url()."mahasiswa/inputticket"?>">Input Ticket</a></li>
                    <!-- <li><a href="#">Cetak Ticket</a></li> -->
                    <li><a href="<?php echo base_url()."mahasiswa/progressticket"?>">Progres Ticket</a></li>
                </ul>
            </li>
        </ul>

    </div>
</nav>
