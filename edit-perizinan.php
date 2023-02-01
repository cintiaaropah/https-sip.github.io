<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Edit Perizinan</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="../assets/img/favicon.png" rel="icon" />
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet" />
    <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet" />
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.4.1
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
  <?php
    include '../koneksi.php';
    $id_Perizinan = $_GET['id_Perizinan'];
    $data = mysqli_query($koneksi,"SELECT * FROM tb_perizinan where id_Perizinan = '$id_Perizinan'");
    while ($d = mysqli_fetch_array($data)){
      ?>
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
    <a class="nav-link collapsed" href="profile.php">
      <i class="bi bi-person"></i>
      <span>Profile</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Avtivity</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
      <li>
        <a href="jadwal-sambangan.php">
          <i class="bi bi-circle"></i><span>Jadwal Sambangan</span>
        </a>
      </li>
      <li>
        <a href="data-perizinan.php" class="active">
          <i class="bi bi-circle"></i><span>Perizinan</span>
        </a>
      </li>
    </ul>
  </li>
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
        <h1>Edit Data Perizinan</h1>
        <nav>
        </nav>
      </div><!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="col-lg-12">
  
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Isi Dengan Benar</h5>
  
                <!-- Horizontal Form -->
                <form method="POST" action="action/aksi-edit-perizinan.php?id=<?php echo $id_Perizinan?>">
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                      <input type="text" name="Nama" class="form-control" value="<?php echo $d['Nama'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Kelas</label>
                    <div class="col-sm-10">
                      <input type="text" name="Kelas" class="form-control" value="<?php echo $d['Kelas'] ?>">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Nis</label>
                    <div class="col-sm-10">
                      <input type="text" name="Nis" class="form-control" value="<?php echo $d['Nis'] ?>">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Tanggal Izin</label>
                    <div class="col-sm-10">
                      <input type="date" name="Tanggal_Izin" class="form-control" value="<?php echo $d['Tanggal_Izin'] ?>">
                    </div>
                  </div>
                  <div class="row mb-2">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                    <div class="col-sm-10">
                      <input type="date" name="Tanggal_Masuk" class="form-control" value="<?php echo $d['Tanggal_Masuk'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Alasan</label>
                    <div class="col-sm-10">
                      <input type="text" name="Alasan" class="form-control" value="<?php echo $d['Alasan'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Pemberi Izin</label>
                    <div class="col-sm-10">
                      <input type="text" name="Pemberi_Izin" class="form-control" value="<?php echo $d['Pemberi_Izin'] ?>">
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                      <input type="text" name="Status" class="form-control" value="<?php echo $d['Status'] ?>">
                    </div>
                  </div>
                  <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Status</legend>
                    <div class="col-sm-10">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Status" id="gridRadios1" value="Menunggu" checked>
                        <label class="form-check-label" for="gridRadios1">
                          Menunggu
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Status" id="gridRadios2" value="Ditolak">
                        <label class="form-check-label" for="gridRadios2">
                          Ditolak
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="Status" id="gridRadios3" value="Disetujui">
                        <label class="form-check-label" for="gridRadios3">
                          Disetujui
                        </label>
                      </div>
                    </div>
                  </fieldset>
        
                  <input class="btn btn-primary" type="submit" value="Tambah">
                  

                  </div>
                </form><!-- End Horizontal Form -->  
              </div>
            </div>  
          </div>
        </div>
      </section>
    </main>
    


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
<?php }