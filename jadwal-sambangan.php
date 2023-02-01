<?php
session_start();
if ($_SESSION['level']!='admin') {
  header ('location:../login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Activity / Jadwal Sambangan</title>
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
    <link href="../assets/vendor/sweetalert2/dist/sweetalert2.css" rel="stylesheet" />

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
    <?php include 'hsf/header.php'?>
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="profile.php">
            <i class="bi bi-person"></i>
            <span>Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-journal-text"></i><span>Activity</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="forms-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
              <a href="jadwal-sambangan.php" class="active"> <i class="bi bi-circle"></i><span>Jadwal Sambangan</span> </a>
            </li>
            <li>
              <a href="data-perizinan.php"> <i class="bi bi-circle"></i><span>Perizinan</span> </a>
            </li>
          </ul>
        </li>
        <!-- End Forms Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-layout-text-window-reverse"></i><span>Master Data</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="data-santri.php"> <i class="bi bi-circle"></i><span>Data Santri</span> </a>
            </li>
            <li>
              <a href="data-ustadz.php"> <i class="bi bi-circle"></i><span>Data Pengurus</span> </a>
            </li>
          </ul>
        </li>
        <!-- End Tables Nav -->

        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#"> <i class="bi bi-bar-chart"></i><span>Catatan Santri</span><i class="bi bi-chevron-down ms-auto"></i> </a>
          <ul id="charts-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="prestasi.php"> <i class="bi bi-circle"></i><span>Prestasi</span> </a>
            </li>
            <li>
              <a href="pelanggaran.php"> <i class="bi bi-circle"></i><span>Pelanggaran</span> </a>
            </li>
          </ul>
        </li>
      <li class="nav-item">
          <a class="nav-link collapsed" href="../sign-out.php">
            <i class="bi bi-box-arrow-right"></i>
            <span>Keluar</span>
          </a>
        </li>
      </ul>
    </aside>    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Jadwal Sambangan</h1>
        <a href="tambah_jadwal_sambangan.php" class="btn btn-primary">Tambah Jadwal</a>

        <nav></nav>
      </div>
      
      <section class="section">
        <div class="row">
          <div class="col-lg-6">
            <div class="card"></div>
          </div>
          

            <div class="card">
              <div class="card-body">
                

                <!-- Table with hoverable rows -->
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Periode</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Waktu</th>
                     
                      <th scope="col">Action</th>            
                    </tr>
                    <?php
                   include '../koneksi.php';
                   //$data = mysqli_query ($koneksi, "SELECT * FROM tb_js");
                   $data = mysqli_query ($koneksi, "SELECT * FROM tb_js");
                   $no = 1;
                   while ($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <th><?php echo $no++; ?></th>
                      <th><?php echo $d['Periode']; ?></th>
                      <th><?php echo $d['Tanggal']; ?></th>
                      <th><?php echo $d['Waktu']; ?></th>
                      <td>
                     <div class="btn-group">
                      <a href="edit-js.php?id_js=<?php echo $d['id_js']?>" class="btn btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger btn-delete" data-delete="action/aksi-hapus-js.php?id=<?php echo $d['id_js'];?>&table=tb_js" data-bs-toggle="modal" data-bs-target="#basicModal">Hapus</button>
                        </div>
                       </th>
                     </tr>
                     <?php } ?>
                   </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- End #main -->
    <div class="modal fade" id="basicModal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Hapus Data</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Apakah anda yakin ingin menghapus data tersebut?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
            <a class="btn btn-danger " id='link-delete' href="#">Ya</a>
          </div>
        </div>
      </div>
    </div>
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
    <script src="../assets/vendor/sweetalert2/dist/sweetalert2.all.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>
  </body>
</html>
