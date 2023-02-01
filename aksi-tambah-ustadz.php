<?php
include '../../koneksi.php';
$nama = $_POST['nama'];
$tempat_lahir = $_POST['Tempat-Lahir'];
$tanggal_lahir = $_POST['Tanggal-Lahir'];
$jk = $_POST['Jenis-Kelamin'];
$profesi = $_POST['Profesi'];
$query="INSERT INTO tb_data_ustadz (Nama,Tempat_Lahir,Tanggal_lahir,Jk,Profesi) VALUES ('$nama','$tempat_lahir','$tanggal_lahir','$jk','$profesi')";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../data-ustadz.php?msg=ditambahkan');
    # code...
} else {
echo mysqli_error($koneksi);
}