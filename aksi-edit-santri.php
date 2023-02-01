<?php
include '../../koneksi.php';
$id=$_GET['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$tmp_lhr = $_POST['Tempat-Lahir'];
$tgl_lhr = $_POST['Tanggal-Lahir'];
$Jk = $_POST['Jenis-Kelamin'];
$status = $_POST['Status'];
$query=" UPDATE  tb_data_santri set Nama='$nama',Nis='$nis',Tempat_Lahir='$tmp_lhr',Tanggal_lahir='$tgl_lhr',Jk='$Jk',Status='$status' where id_santri='$id' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    header('location:../data-santri.php?msg=disimpan');
    # code...
} else {
echo mysqli_error($koneksi);
}

