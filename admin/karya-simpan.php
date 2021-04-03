<?php
include_once('../functions/include_all.php');

if (@$_GET['action'] == 'hapus'){
    $sql = "DELETE FROM tb_karya WHERE id = $_GET[id]";
    if (db_exec($sql)){
        redirect_to('karya.php');
    }else{
        echo 'Gagal hapus karya';
    }
}

// Uploading karya
// ambil data file
$namaFile = $_FILES['foto_karya']['name'];
$namaSementara = $_FILES['foto_karya']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../karya/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
if ($terupload) {
    echo "Upload berhasil!<br/>";
} else {
    echo "Error dalam mengupload foto";
    die();
}

echo "<pre>";
print_r($_POST);
print_r($_FILES);

// jika sebelumnya memiliki id karya, maka ini adalah mode edit
if ($_POST['id_karya'] != 0) {
    $sql_simpan = "UPDATE tb_karya SET judul_karya = '$_POST[judul]', keterangan = '$_POST[keterangan]', tanggal = '$_POST[tanggal]', foto = 'karya/$namaFile', kode_id = '$_POST[kode_id]' WHERE id = $_POST[id_karya]";
} else {
    $sql_simpan = "INSERT INTO `tb_karya` (`judul_karya`, `keterangan`, `tanggal`, `foto`, `kode_id`) VALUES ('$_POST[judul]', '$_POST[keterangan]', '$_POST[tanggal]', 'karya/$namaFile', '$_POST[kode_id]');";
}
echo "</pre>";
if (db_exec($sql_simpan)) {
    echo "Karya berhasil tersimpan";
    redirect_to('karya.php');
} else {
    echo "Karya gagal tersimpan";
}