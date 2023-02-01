<?php
include '../../koneksi.php';
$id=$_GET['id'];
$Periode = $_POST['Periode'];
$Tanggal = $_POST['Tanggal'];
$Waktu = $_POST['Waktu'];
$query=" UPDATE  tb_js set Periode='$Periode',Tanggal='$Tanggal',Waktu='$Waktu' where id_js='$id' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    header('location:../jadwal-sambangan.php?msg=disimpan');
    # code...
} else {
echo mysqli_error($koneksi);
}

