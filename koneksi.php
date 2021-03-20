<?php
 

 function koneksi_sanggar(){
     //koneksi database//
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "db_sanggar";
    $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));
    return $koneksi;
 }