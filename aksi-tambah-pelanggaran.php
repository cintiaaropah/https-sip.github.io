<?php
include '../../koneksi.php';
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Pelanggaran = $_POST['Pelanggaran'];
$Tanggal = $_POST['Tanggal'];
$Hukuman = $_POST['Hukuman'];
$query="INSERT INTO tb_pelanggaran (Nama,Kelas,Pelanggaran,Tanggal,Hukuman) VALUES ('$Nama','$Kelas','$Pelanggaran','$Tanggal','$Hukuman')";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../pelanggaran.php?msg=ditambahkan');
    # code...
} else {
echo mysqli_error($koneksi);
}

