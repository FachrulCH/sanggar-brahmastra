<?php
 function koneksi_sanggar(){
     //koneksi database//
    global $SERVER, $USER, $PASSWORD, $DATABASE;
    $koneksi = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE) or die(mysqli_error($koneksi));
    return $koneksi;
 }

 function db_query($sql){
    $tampil = mysqli_query(koneksi_sanggar(), $sql);
    return mysqli_fetch_array($tampil);
 }