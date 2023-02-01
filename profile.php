<?php
session_start();
if ($_SESSION['level']!='admin') {
  header ('location:../login.php');
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
 
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<?php
    include '../koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM tb_profil where id_profil = '1'");
  $d = mysqli_fetch_array($data);
      ?>
<body>
  <?php include 'hsf/header.php'?>
  <aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link collapsed" href="index.php">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  <li class="nav-item">
    <a class="nav-link " href="profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li><!-- End Profile Page Nav -->
<!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Activity</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="jadwal-sambangan.php">
          <i class="bi bi-circle"></i><span>Jadwal Sambangan</span>
        </a>
      </li>
      <li>
        <a href="data-perizinan.php">
          <i class="bi bi-circle"></i><span>Perizinan</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="data-santri.php">
          <i class="bi bi-circle"></i><span>Data Santri</span>
        </a>
      </li>
      <li>
        <a href="data-ustadz.php">
          <i class="bi bi-circle"></i><span>Data Pengurus</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Catatan Santri</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="prestasi.php">
          <i class="bi bi-circle"></i><span>Prestasi</span>
        </a>
      </li>
      <li>
        <a href="pelanggaran.php">
          <i class="bi bi-circle"></i><span>Pelanggaran</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="../sign-out.php">
      <i class="bi bi-box-arrow-right"></i>
      <span>Keluar</span>
    </a>
  </li>
</ul>

</aside>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
      <a href="edit-profil.php" class="btn btn-warning">Edit</a>

      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      
       
        <div class="col-lg-12">

          <!-- Default Card -->
          <div class="card">
          <div class="text-center">
            <div class="card-body">
             
            
              <h5 class="card-title">Nama Pondok Pesantren</h5>
              <?php echo $d['Nama_Ponpes']; ?>
            </div>
          </div>
</div>
</div>
              <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Pengasuh Pondok Pesantren</h5>

              <div class="row mb-3">
                <div class="col-6 offset-3">
                    <img src="../foto/<?php echo $d['Foto_Pengasuh']; ?>" class="d-block w-100" alt="...">
                    <h5 class="card-title"></h5>             
                    <?php echo $d['Nama_Pengasuh_Ponpes']; ?>

              <!-- Slides only carousel -->
              
                </div>
              </div><!-- End Slides only carousel-->
            </div>
          </div>       
        </div>
<!-- sambutan card -->
        <div class="col-lg-12">
          <div class="card">
          <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Sambutan Pengasuh Pondok</h5> 
              <?php echo $d['Sambutan_Pengasuh_Ponpes']; ?>
            
            </div>
          </div>
        </div>
       </div>
       <!-- sambutan akhr card -->
       <!-- tentang pondok awawl -->
       <div class="col-lg-12">
          <div class="card">
          <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Tentang Pondok </h5>   
              <?php echo $d['Tentang_Ponpes']; ?>
          
            </div>
          </div>
        </div>
       </div>
       <!-- tentang pondok akhir -->

         <!-- visi awal -->        
      <div class="row align-items-top">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
            <div class style="height: 300px;widht: 300px;">
              <h5 class="card-title">Visi Pondok</h5>
              <?php echo $d['Visi_Ponpes']; ?>

            </div>
            </div>
          </div>
        </div>
<!-- visi akhir -->
<!-- misi akhir -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
            <div class style="height: 300px;widht: 300px;">
              <h5 class="card-title">Misi Pondok</h5>
              <?php echo $d['Misi_Ponpes']; ?>
              </div>
            </div>
          </div>
    <!-- misi akhir -->
   
       </div>      
      </div>      
      </div>
      <!-- tujuan awal -->
      <div class="col-lg-12">
          <div class="card">
          <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Moto Ponpes </h5> 
              <?php echo $d['Tujuan_Ponpes']; ?>
            
            </div>
          </div>
        </div>
       </div>
       <!-- tujuan akhir -->
       <!-- Progam awal -->
       <div class="col-lg-12">
          <div class="card">
          <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Program Pondok </h5> 
              <?php echo $d['Program_Ponpes']; ?>
            
            </div>
          </div>
        </div>
       </div>
<!-- Program akhir -->
        </div>       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <?php include 'hsf/footer.php'?>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>