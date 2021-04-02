<?php
include_once('../functions/include_all.php');

// Uploading testimonial
// ambil data file
$namaFile = $_FILES['foto_testimonial']['name'];
$namaSementara = $_FILES['foto_testimonial']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "../images/testimonial/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);
if ($terupload) {
    echo "Upload berhasil!<br/>";
} else {
    echo "Error dalam mengupload foto";
    die();
}



// jika sebelumnya memiliki id testimonial, maka ini adalah mode edit
if ($_POST['id_testimonial'] != 0) {
    $sql_simpan = "UPDATE tb_testimonial SET nama = '$_POST[nama_testimonial]', keterangan = '$_POST[keterangan]', pesan = '$_POST[pesan]', foto = 'images/testimonial/$namaFile' WHERE id = $_POST[id_testimonial]";
} else {
    $sql_simpan = "INSERT INTO `tb_testimonial` (`nama`, `keterangan`, `pesan`, `foto`) VALUES ('$_POST[nama_testimonial]', '$_POST[keterangan]', '$_POST[pesan]', 'images/testimonial/$namaFile');";
}

if (db_exec($sql_simpan)) {
    echo "testimonial berhasil tersimpan";
    redirect_to('testimonial.php');
} else {
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "testimonial gagal tersimpan";
    echo "</pre>";
}
