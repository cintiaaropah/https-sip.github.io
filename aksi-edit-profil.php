<?php
include '../../koneksi.php';
$nama_ponpes = $_POST['Nama_Ponpes'];
$nama_pengasuh_ponpes = $_POST['Nama_Pengasuh_Ponpes'];
$sambutan_pengasuh_ponpes = $_POST['Sambutan_Pengasuh_Ponpes'];
$tentang_ponpes = $_POST['Tentang_Ponpes'];
$visi_pondok = $_POST['Visi_Ponpes'];
$misi_ponpes = $_POST['Misi_Ponpes'];
$tujuan_pondok = $_POST['Tujuan_Ponpes'];
$program_ponpes = $_POST['Program_Ponpes'];
$query=" UPDATE  tb_profil set Nama_Ponpes='$nama_ponpes',Nama_Pengasuh_Ponpes='$nama_pengasuh_ponpes',Sambutan_Pengasuh_Ponpes='$sambutan_pengasuh_ponpes',Tentang_Ponpes='$tentang_ponpes',Visi_Ponpes='$visi_pondok',Misi_Ponpes='$misi_ponpes',Tujuan_Ponpes='$tujuan_pondok',Program_Ponpes='$program_ponpes' where id_profil='1' ";
$update=mysqli_query($koneksi,$query);
if ($update) {
    if ($_FILES['Foto_Pengasuh']['size']>0) {
        $nama_file=explode('.',$_FILES['Foto_Pengasuh']['name']);
        $foto=round(microtime(true)).'.'.end($nama_file);
        if (is_uploaded_file($_FILES['Foto_Pengasuh']['tmp_name'])) {
            if (move_uploaded_file($_FILES['Foto_Pengasuh']['tmp_name'], '../../foto/'.$foto)) {
                $query=" UPDATE  tb_profil set Foto_Pengasuh='$foto' where id_profil='1' ";
                $update=mysqli_query($koneksi,$query);
                echo "terupload";
            }
        }
    }
    header('location:../profile.php?msg=disimpan');
    # code...
}
echo mysqli_error($koneksi);


