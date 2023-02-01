<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_js') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_js='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../jadwal-sambangan.php?dihapus');
        # code...
    }
}

