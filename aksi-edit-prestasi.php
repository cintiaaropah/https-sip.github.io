<?php
include '../../koneksi.php';
$id=$_GET['id'];
$judul_prestasi = $_POST['Judul_Prestasi'];
$keterangan_prestasi = $_POST['Keterangan_Prestasi'];
$query=" UPDATE  tb_prestasi set Judul_Prestasi='$judul_prestasi',Keterangan_Prestasi='$keterangan_prestasi' where id_Prestasi='$id' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    if ($_FILES['Foto_Prestasi']['size']>0) {
        $nama_file=explode('.',$_FILES['Foto_Prestasi']['name']);
        $foto=round(microtime(true)).'.'.end($nama_file);
        if (is_uploaded_file($_FILES['Foto_Prestasi']['tmp_name'])) {
            if (move_uploaded_file($_FILES['Foto_Prestasi']['tmp_name'], '../../foto/'.$foto)) {
                $query=" UPDATE  tb_prestasi set Foto_Prestasi='$foto' where id_Prestasi='$id' ";
                $update=mysqli_query($koneksi,$query);
                echo "terupload";
            }
        }
    }
    header('location:../prestasi.php?msg=disimpan');
    # code...
}
echo mysqli_error($koneksi);


