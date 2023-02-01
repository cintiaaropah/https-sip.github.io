<?php
include '../../koneksi.php';
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$tmp_lhr = $_POST['Tempat-Lahir'];
$tgl_lhr = $_POST['Tanggal-Lahir'];
$Jk = $_POST['Jenis-Kelamin'];
$status = $_POST['Status'];
$query="INSERT INTO tb_data_santri (Nama,Nis,Tempat_Lahir,Tanggal_lahir,Jk,Status) VALUES ('$nama','$nis','$tmp_lhr','$tgl_lhr','$Jk','$status')";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../data-santri.php?msg=ditambahkan');
    # code...
} else {
echo mysqli_error($koneksi);
}

