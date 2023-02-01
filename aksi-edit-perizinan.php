<?php
include '../../koneksi.php';
$id=$_GET['id'];
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Nis = $_POST['Nis'];
$Tanggal_Izin = $_POST['Tanggal_Izin'];
$Tanggal_Masuk= $_POST['Tanggal_Masuk'];
$Alasan = $_POST['Alasan'];
$Pemberi_Izin = $_POST['Pemberi_Izin'];
$Status = $_POST['Status'];
$query=" UPDATE  tb_perizinan set Nama='$Nama',Kelas='$Kelas',Nis='$Nis',Tanggal_Izin='$Tanggal_Izin',Tanggal_Masuk='$Tanggal_Masuk',Alasan='$Alasan',Pemberi_Izin='$Pemberi_Izin',Status='$Status' where id_Perizinan='$id' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    header('location:../data-perizinan.php?msg=disimpan');
    # code...
} else {
echo mysqli_error($koneksi);
}