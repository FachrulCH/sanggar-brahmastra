<?php

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
}