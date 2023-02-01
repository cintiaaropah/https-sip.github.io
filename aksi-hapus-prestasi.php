<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_prestasi') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_Prestasi='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../prestasi.php?dihapus');
        # code...
    }
}

