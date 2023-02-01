<?php
include '../../koneksi.php';
$table=$_GET['table'];
if ($table=='tb_perizinan') {
    $id=$_GET['id'];
    $query="DELETE FROM $table where id_Perizinan='$id'";
    $delete=mysqli_query($koneksi,$query);
    echo $query;
    if ($delete) {
        header ('location:../data-perizinan.php?dihapus');
        # code...
    }
}

