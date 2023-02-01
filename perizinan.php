<?php
session_start();
if ($_SESSION['level']!='admin') {
  header ('location:../login.php');
}
$koneksi = mysqli_connect("localhost", "root", "", "db_sip");
include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Activity / Perizinan</title>
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
  <?php
  include '../koneksi.php';
    $data = mysqli_query($koneksi,"SELECT * FROM tb_perizinan where id_perizinan = '1'");
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
          <i class="bi bi-circle"></i><span>Data Ustadz</span>
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
        <h1>Perizinan</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"></a></li>
            <li class="breadcrumb-item">Form Peizinan</li>
          </ol>
        </nav>
      </div>
      <!-- End Page Title -->
      <section class="section">
        <div class="row">
          <div class="card">
            <div class="col-lg-8">
              <div class="card-body">
                <h5 class="card-title">Isi formulir ini dengan benar dan jujur</h5>

                <!-- Vertical Form -->
              
                  <div class="col-12">
                    <label for="inputNanme4" class="form-label">Nama </label>
                    <input type="text" name="Nama" class="form-control" id="inputNanme4" />
                  </div>
                  <div class="col-12">
                    <label for="inputEmail4" class="form-label">Kelas</label>
                    <input type="text" name="Kelas" class="form-control" id="inputKelas" />
                  </div>
                  <div class="col-12">
                    <label for="inputPassword4" class="form-label">Nis</label>
                    <input type="text" name="Nis" class="form-control" id="inputNis" />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Tanggal ijin</label>
                    <input type="date"  name="Tanggal_Izin" class="form-control" id="inputTanggalijin" />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Tanggal Masuk/kembali</label>
                    <input type="text"  name="Tanggal_Masuk" class="form-control" id="inputTanggalmasuk/kembali" />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Alasan</label>
                    <input type="text"  name="Alasan" class="form-control" id="inputAlasan" />
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Pemberi Izin (Nama Ustad/ustadzah)</label>
                    <input type="text"  name="Pemberi_Izin" class="form-control" id="inputNamaUstadz/ustadzah" />
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
        
                  <div class="text-center">
                  <input class="btn btn-primary" type="submit" value="Tambah">
                  </div>
                </form>
                <!-- Vertical Form -->
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->

    <!-- End Footer -->

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
