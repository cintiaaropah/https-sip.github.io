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

    <title>Dashboard</title>
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
    $data = mysqli_query($koneksi,"SELECT * FROM tb_dashboard where id_Dashboard = '1'");
    $d = mysqli_fetch_array($data);
    $jumlah_santri = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(id_santri) AS jumlah_total FROM `tb_data_santri`"));
    $jumlah_ustadz = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(id_ustadz) AS jumlah_total FROM `tb_data_ustadz`"));
    $jumlah_prestasi = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(id_Prestasi) AS jumlah_total FROM `tb_prestasi`"));
    $jumlah_santri_lakilaki = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(id_santri) AS jumlah_total FROM `tb_data_santri` where Jk='laki-laki'"));
    $jumlah_santri_perempuan = mysqli_fetch_array(mysqli_query($koneksi,"SELECT COUNT(id_santri) AS jumlah_total FROM `tb_data_santri` where Jk='perempuan'"));

      ?>
  <body>
    <?php include 'hsf/header.php'?>
    <?php include 'hsf/sidebar.php'?>
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>Dashboard</h1>
        

        <nav></nav>
      </div>
      <!-- End Page Title -->
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  
                  <h5 class="card-title">Jumlah Santri</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6><?= $jumlah_santri['jumlah_total'] ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
              <!-- End Sales Card -->

              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                

                <div class="card-body">
                  <h5 class="card-title">Jumlah Pengurus</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                    <h6><?= $jumlah_ustadz['jumlah_total'] ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div>
              <!-- End Revenue Card -->

              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                
                <div class="card-body">
                  <div class="text-center">
                  <h5 class="card-title">Jumlah Prestasi </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-trophy"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?= $jumlah_prestasi['jumlah_total'] ?></h6>

                    </div>
                  </div>
</div>
                </div>
              </div>

            </div>
              <!-- End Customers Card -->

              <!-- Reports -->

              <!-- End Reports -->

              <!-- Recent Sales -->
              <!-- End Recent Sales -->

              <!-- Top Selling -->
              <!-- End Top Selling -->
            </div>
          </div>
          <!-- End Left side columns -->

          <!-- Right side columns -->
          <div class="col-lg-4">
            <!-- Recent Activity -->

            <!-- End Recent Activity -->

            <!-- Budget Report -->

            <!-- End Budget Report -->

            <!-- Website Traffic -->
            <div class="card">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class=""></i></a>
                  
              </div>

              <div class="card-body pb-0">
              <h5 class="card-title">Details</h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart" name="Jenis-Kelamin"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Jumlah Santri',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: <?= $jumlah_santri_lakilaki['jumlah_total']?>,
                          name: 'Laki - Laki'
                        },
                        {
                          value: <?= $jumlah_santri_perempuan['jumlah_total']?>,
                          name: 'Perempuan'
                        },
                      ]
                    }]
                  });
                });
              </script>

            </div>
            </div>
            <!-- End Website Traffic -->

            <!-- End News & Updates -->
          </div>
          <!-- End Right side columns -->
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
