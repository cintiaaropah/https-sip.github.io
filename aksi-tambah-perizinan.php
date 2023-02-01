<?php
include '../../koneksi.php';
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Nis = $_POST['Nis'];
$Tanggal_Izin = $_POST['Tanggal_Izin'];
$Tanggal_Masuk= $_POST['Tanggal_Masuk'];
$Alasan = $_POST['Alasan'];
$Pemberi_Izin = $_POST['Pemberi_Izin'];
$Status = $_POST['Pemberi_Izin'];
$query="INSERT INTO tb_perizinan (Nama,Kelas,Nis,Tanggal_Izin,Tanggal_Masuk,Alasan,Pemberi_Izin,Status) VALUES ('$Nama','$Kelas','$Nis','$Tanggal_Izin','$Tanggal_Masuk','$Alasan','$Pemberi_Izin','$Status')";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../data-perizinan.php?msg=ditambahkan');
    # code...
} else {
echo mysqli_error($koneksi);
}

