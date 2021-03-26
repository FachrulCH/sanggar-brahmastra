<?php
 function koneksi_sanggar(){
     //koneksi database//
    global $SERVER, $USER, $PASSWORD, $DATABASE;
    $koneksi = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE) or die(mysqli_error($koneksi));
    return $koneksi;
 }

function db_exec($sql){
    return mysqli_query(koneksi_sanggar(), $sql);
}

 function db_query($sql){
    $tampil = mysqli_query(koneksi_sanggar(), $sql);
    return mysqli_fetch_assoc($tampil);
 }

 function db_get_all($sql){
    $tampil = mysqli_query(koneksi_sanggar(), $sql);
    while($row = mysqli_fetch_assoc($tampil)){
        $return[] = $row;
    }
    return $return;
 }