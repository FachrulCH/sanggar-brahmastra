<?php
include_once('../functions/include_all.php');

// Uploading karya
// ambil data file
$namaFile = $_FILES['foto_karya']['name'];
$namaSementara = $_FILES['foto_karya']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../karya/guru/";

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
if (isset($_POST['id_karya'])) {
    $sql_simpan = "UPDATE tb_karya_guru SET judul_karya = '$_POST[judul]', keterangan = '$_POST[keterangan]', tanggal = '$_POST[tanggal]', foto = 'karya/guru/$namaFile' WHERE id = $_POST[id_karya]";
} else {
    $sql_simpan = "INSERT INTO `tb_karya_guru` (`id_guru`, `judul_karya`, `keterangan`, `tanggal`, `foto`) VALUES ('$_POST[id_guru]', '$_POST[judul]', '$_POST[keterangan]', '$_POST[tanggal]', 'karya/guru/$namaFile');";
}
echo "</pre>";
if (db_exec($sql_simpan)) {
    echo "Karya berhasil tersimpan";
    redirect_to('karya.php?id='.$_POST['id_guru']);
} else {
    echo "Karya gagal tersimpan";
}
