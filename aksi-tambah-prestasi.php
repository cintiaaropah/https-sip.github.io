<?php
include '../../koneksi.php';
$Judul_Prestasi = $_POST['Judul_Prestasi'];
$Keterangan_Prestasi = $_POST['Keterangan_Prestasi'];
    // koding dari sini
    if ($_FILES['Foto_Prestasi']['size']>0) {
        $nama_file=explode('.',$_FILES['Foto_Prestasi']['name']);
        $foto=round(microtime(true)).'.'.end($nama_file);
        if (is_uploaded_file($_FILES['Foto_Prestasi']['tmp_name'])) {
            if (move_uploaded_file($_FILES['Foto_Prestasi']['tmp_name'], '../../foto/'.$foto)) {
                // sampai sini
                $query="INSERT INTO tb_prestasi (Foto_Prestasi, Judul_Prestasi,Keterangan_Prestasi) VALUES ('$foto','$Judul_Prestasi','$Keterangan_Prestasi')";
                $insert=mysqli_query($koneksi,$query);
                echo "teruploud";
            }
        }
    
    header('location:../prestasi.php?msg=ditambahkan');
}
echo mysqli_error($koneksi);


