<?php
include_once('../functions/include_all.php');

if (@$_GET['action'] == 'hapus'){
    $sql = "DELETE FROM tb_kegiatan WHERE id = $_GET[id]";
    if (db_exec($sql)){
        redirect_to('kegiatan.php');
    }else{
        echo 'Gagal hapus kegiatan';
    }
}

// Uploading kegiatan
// ambil data file
$namaFile = $_FILES['foto_kegiatan']['name'];
$namaSementara = $_FILES['foto_kegiatan']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../images/kegiatan/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
if ($terupload) {
    echo "Upload berhasil!<br/>";
} else {
    echo "Error dalam mengupload foto";
    die();
}



// jika sebelumnya memiliki id kegiatan, maka ini adalah mode edit
if ($_POST['id_kegiatan'] != 0) {
    $sql_simpan = "UPDATE tb_kegiatan SET nama_kegiatan = '$_POST[nama_kegiatan]', keterangan = '$_POST[keterangan]', tanggal = '$_POST[tanggal]', gambar = 'images/kegiatan/$namaFile' WHERE id = $_POST[id_kegiatan]";
} else {
    $sql_simpan = "INSERT INTO `tb_kegiatan` (`nama_kegiatan`, `keterangan`, `tanggal`, `gambar`) VALUES ('$_POST[nama_kegiatan]', '$_POST[keterangan]', '$_POST[tanggal]', 'images/kegiatan/$namaFile');";
}

if (db_exec($sql_simpan)) {
    echo "kegiatan berhasil tersimpan";
    redirect_to('kegiatan.php');
} else {
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "kegiatan gagal tersimpan";
    echo "</pre>";
}
