<?php
include '../../koneksi.php';
$id=$_GET['id'];
$nama = $_POST['nama'];
$tempat_lahir = $_POST['Tempat-Lahir'];
$tanggal_lahir = $_POST['Tanggal-Lahir'];
$jk = $_POST['Jenis-Kelamin'];
$profesi = $_POST['Profesi'];
$query=" UPDATE tb_data_ustadz set Nama='$nama',Tempat_Lahir='$tempat_lahir',Tanggal_lahir='$tanggal_lahir',Jk='$jk',Profesi='$profesi' where id_ustadz='$id' ";
$insert=mysqli_query($koneksi,$query);
if ($insert) {
    header('location:../data-ustadz.php?msg=disimpan');
    # code...
} else {
echo mysqli_error($koneksi);
}