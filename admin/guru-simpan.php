<?php
include_once('functions/include_all.php');

if ($_GET['aksi'] == 'foto') {
    if (isset($_POST['hapus_foto'])) {
        echo "foto dihapus";
    }

    if (isset($_POST['simpan_foto'])) {
        echo "foto disimpan";
    }
}

if ($_GET['aksi'] == 'profil') {
    echo "Simpan profil";
    print_r($_POST);
    if ($_POST['id'] != 0){
        $sql = <<<SQL
        UPDATE tb_profile_guru 
            SET name = $_POST[nama]
            SET profile = $_POST[biodata]
            SET experience = $_POST[pengalaman]
        WHERE id = $_POST[id]
        SQL;
    }else{
        $sql = <<<SQL
        INSERT INTO `tb_profile_guru` (`id`, `name`, `profile`, `experience`) 
        VALUES (NULL, '$_POST[nama]', '$_POST[biodata]', '$_POST[pengalaman]');
        SQL;
    }
    print($sql);
    db_exec($sql);
}

if ($_GET['aksi'] == 'profil_hapus') {
    echo "hapus profil";
}