<?php
include '../../koneksi.php';
$Nama_Pondok = $_POST['Nama_Pondok'];
$query=" UPDATE  tb_dashboard set Nama_Pondok='$Nama_Pondok' where id_Dashboard='1' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    if ($_FILES['Foto_Pesantren']['size']>0) {
        $nama_file=explode('.',$_FILES['Foto_Pesantren']['name']);
        $foto=round(microtime(true)).'.'.end($nama_file);
        if (is_uploaded_file($_FILES['Foto_Pesantren']['tmp_name'])) {
            if (move_uploaded_file($_FILES['Foto_Pesantren']['tmp_name'], '../../foto/'.$foto)) {
                $query=" UPDATE  tb_dashboard set Foto_Pesantren='$foto' where id_Dashboard='1' ";
                $update=mysqli_query($koneksi,$query);
                echo "terupload";
            }
        }
    }
    header('location:../index.php?msg=disimpan');
    # code...
}
echo mysqli_error($koneksi);


