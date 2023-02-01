<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_data_ustadz') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_ustadz='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../data-ustadz.php?dihapus');
        # code...
    }
}

