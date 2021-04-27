<?php
include_once('../functions/include_all.php');
$image_default = '/images/avatar-placeholder.png';
echo "<pre>";
if (@$_GET['aksi'] == 'foto_hapus') {
    if (isset($_GET['id'])) {
        $sql_simpan_foto = "UPDATE tb_profile_guru SET foto = '$image_default' WHERE id = $_GET[id]";
        if (db_exec($sql_simpan_foto)) {
            echo "Foto berhasil terhapus";
            redirect_to('guru.php');
        } else {
            echo "Foto gagal terhapus";
            redirect_to('guru.php');
        }
    }
}

if ($_GET['aksi'] == 'profil_hapus') {
    $sql_hapus = "DELETE FROM tb_profile_guru WHERE id = $_GET[id]";
    if (db_exec($sql_hapus)) {
        echo "Profil terhapus";
        redirect_to('guru.php');
    }
}


if ($_GET['aksi'] == 'foto') {
    if (isset($_POST['simpan_foto'])) {
        echo "foto disimpan";
        
        echo trim(shell_exec('whoami'));
        print_r($_POST);
        print_r($_FILES);
        
        // ambil data file
        $namaFile = $_FILES['foto_profil']['name'];
        $namaSementara = $_FILES['foto_profil']['tmp_name'];

        // tentukan lokasi file akan dipindahkan
        $dirUpload = "../images/";

        // pindahkan file
        $terupload = move_uploaded_file($namaSementara, $dirUpload . $namaFile);

        if ($terupload) {
            echo "Upload berhasil!<br/>";
            // update database untuk file foto
            $foto = "images/$namaFile";
            $sql_simpan_foto = "UPDATE tb_profile_guru SET foto = '$foto' WHERE id = $_POST[id]";
            if (db_exec($sql_simpan_foto)) {
                echo "Foto berhasil tersimpan";
                redirect_to('guru.php');
            } else {
                echo "Foto gagal tersimpan";
                redirect_to('guru.php');
            }
        } else {
            echo "Upload Gagal!";
        }
    }
}

if ($_GET['aksi'] == 'profil') {
    echo "Simpan profil";
    // print_r($_POST);
    if ($_POST['id'] != 0) {
        $sql = "UPDATE tb_profile_guru SET name = '$_POST[nama]', profile = '$_POST[biodata]', experience = '$_POST[pengalaman]', kode_id = '$_POST[kode_id]' WHERE id = $_POST[id]";
    } else {
        $sql = <<<SQL
        INSERT INTO `tb_profile_guru` (`id`, `name`, `profile`, `experience`, `foto`, `kode_id`) 
        VALUES (NULL, '$_POST[nama]', '$_POST[biodata]', '$_POST[pengalaman]', '$image_default', '$_POST[kode_id]');
        SQL;
    }
    // print($sql);
    $simpan = db_exec($sql);
    if ($simpan == true) {
        echo "Data berhasil tersimpan";
        redirect_to('guru.php');
    }
}
echo "</pre>";