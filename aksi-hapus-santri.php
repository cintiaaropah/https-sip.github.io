<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_data_santri') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_santri='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../data-santri.php?dihapus');
        # code...
    }
}

