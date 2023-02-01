<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_pelanggaran') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_Pelanggaran='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../pelanggaran.php?dihapus');
        # code...
    }
}

