<?php
include_once('../functions/include_all.php');

// echo "<pre>";
// print_r($_POST);

$sql1 = "UPDATE `tb_profile_sanggar` SET judul = '$_POST[judulHeadline1]', keterangan = '$_POST[headline1]' WHERE `id` = 1;";
$sql2 = "UPDATE `tb_profile_sanggar` SET judul = '$_POST[judulHeadline2]', keterangan = '$_POST[headline2]' WHERE `id` = 2;";

if (db_exec($sql1) && db_exec($sql2)){
    echo "Data berhasil tersimpan";
    redirect_to('sanggar.php');
}else{

}
