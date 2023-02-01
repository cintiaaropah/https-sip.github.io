<?php
include '../../koneksi.php';
$id=$_GET['id'];
$Nama = $_POST['Nama'];
$Kelas = $_POST['Kelas'];
$Pelanggaran = $_POST['Pelanggaran'];
$Tanggal = $_POST['Tanggal'];
$Hukuman = $_POST['Hukuman'];
$query=" UPDATE  tb_pelanggaran set Nama='$Nama',Kelas='$Kelas',Pelanggaran='$Pelanggaran',Tanggal='$Tanggal',Hukuman='$Hukuman' where id_Pelanggaran='$id' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    header('location:../pelanggaran.php?msg=disimpan');
    # code...
} else {
echo mysqli_error($koneksi);
}

