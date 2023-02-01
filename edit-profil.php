<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit Profile</title>
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
        <a href="data_perizinan.php">
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
      <h1>Edit Profile</h1>
    </div><!-- End Page Title -->
    <section class="section">
    <form method="POST" enctype='multipart/form-data' action="action/aksi-edit-profil.php">

       
        <div class="col-lg-12">

          <!-- Default Card -->
          <div class="card">
          <div class="text-center">
            <div class="card-body">
              <h5 class="card-title">Nama Ponpes</h5>
              <textarea name="Nama_Ponpes" class='tinymce' placeholder='Nama Ponpes' value=""><?php echo $d['Nama_Ponpes'] ?></textarea>            
            </div>
          </div>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-12">
        <div class="card">
        <div class="text-center">
        <div class="card-body">
          <h5 class="card-title">Foto Pengasuh pondok</h5>
              <!-- Slides only carousel -->
              <div class="row mb-3">
                <div class="col-6 offset-3">
                  <label>
                    <div class="image-holder">
                      <div class="overly"><i class="bx bx-image"></i></div>
                      <img src="../foto/<?php echo $d['Foto_Pengasuh']; ?>" id="gambar_terpilih" class="d-block w-100" alt="...">
                      </div>
                      <input style="visibility:hidden" type='file' name='Foto_Pengasuh' id="pilih_gambar" >
                    <h5 class="card-title">Nama Pengasuh Ponpes</h5>
                  </label>
                </div>
              </div><!-- End Slides only carousel-->
              <textarea name="Nama_Pengasuh_Ponpes" class='tinymce' placeholder='Nama Pengasuh Ponpes' value=""><?php echo $d['Nama_Pengasuh_Ponpes'] ?></textarea>
            </div>
          </div>       
        </div>
<!-- sambutan card -->
        <div class="col-lg-12">
          <div class="card">
          <div class="">
            <div class="text-center">
            <div class="card-body">
            <h5 class="card-title">Sambutan Pengasuh Ponpes </h5>  
            <textarea name="Sambutan_Pengasuh_Ponpes" class='tinymce' placeholder='Sambutan Pengasuh Ponpes' value=""><?php echo $d['Sambutan_Pengasuh_Ponpes'] ?></textarea>
              </div>             
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
              <h5 class="card-title">Tentang Ponpes </h5>  
              <textarea name="Tentang_Ponpes" class='tinymce' placeholder='Tentang Ponpes' value=""><?php echo $d['Tentang_Ponpes'] ?></textarea>
           
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
              <h5 class="card-title">Visi Ponpes</h5>
              <textarea name="Visi_Ponpes" class='tinymce' placeholder='Visi Ponpes' value=""><?php echo $d['Visi_Ponpes'] ?></textarea>

            </div>
          </div>
        </div>
<!-- visi akhir -->
<!-- misi akhir -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Misi Ponpes</h5>
              <textarea name="Misi_Ponpes" class='tinymce' placeholder='Misi Ponpes' value=""><?php echo $d['Misi_Ponpes'] ?></textarea>

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
              <textarea name="Tujuan_Ponpes" class='tinymce' placeholder='Moto Ponpes' value=""><?php echo $d['Tujuan_Ponpes'] ?></textarea>

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
              <h5 class="card-title">Program Ponpes </h5> 
              <textarea name="Program_Ponpes" class='tinymce' placeholder='Program Ponpes' value=""><?php echo $d['Program_Ponpes'] ?></textarea>
            
            </div>
          </div>
        </div>
       </div>

<!-- Program akhir -->
        </div>       
      </div>
      <button class="btn btn-primary" type="submit" value="Tambah">Submit</button>

</form>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  
  <?php include 'hsf/footer.php'?>
  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <!-- <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script> -->
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="https://cdn.tiny.cloud/1/9itgriy90vlqq8utp58vwdgdp06frez49d36w3lv684grblh/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  <script>
    var pilih_gambar = document.getElementById('pilih_gambar'),
    gambar_terpilih = document.getElementById('gambar_terpilih');
  pilih_gambar.onchange = (evt) => {
    const [file] = pilih_gambar.files;
    if (file) {
      gambar_terpilih.src = URL.createObjectURL(file);
    }
  };
  </script>

</tbody>

</html>