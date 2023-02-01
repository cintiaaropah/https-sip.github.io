<?php
include '../../koneksi.php';
$Periode = $_POST['Periode'];
$Tanggal = $_POST['Tanggal'];
$Waktu = $_POST['Waktu'];
$query="INSERT INTO tb_js (Periode,Tanggal,Waktu) VALUES ('$Periode','$Tanggal','$Waktu')";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../jadwal-sambangan.php?msg=ditambahkan');
    # code...
} else {
echo mysqli_error($koneksi);
}

