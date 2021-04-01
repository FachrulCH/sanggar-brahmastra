<?php
include_once('../functions/include_all.php');

// Uploading karya
// ambil data file
$namaFile = $_FILES['foto_karya']['name'];
$namaSementara = $_FILES['foto_karya']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../karya/murid/";

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
    $sql_simpan = "UPDATE tb_hasil_karya SET judul_karya_siswa = '$_POST[judul]', karya = 'karya/siswa/$namaFile' WHERE id = $_POST[id_karya]";
} else {
    $sql_simpan = "INSERT INTO `tb_hasil_karya` (`nama_siswa`, `judul_karya_siswa`, `karya_siswa`) VALUES ('$_POST[nama_siswa]', '$_POST[judul_karya_siswa]','karya/siswa/$namaFile');";
}
echo "</pre>";
if (db_exec($sql_simpan)) {
    echo "Karya berhasil tersimpan";
    redirect_to('gallery-siswa.php?id='.$_POST['id_hasil']);
} else {
    echo "Karya gagal tersimpan";
}