<?php
function koneksi_sanggar()
{
    //koneksi database//
    global $SERVER, $USER, $PASSWORD, $DATABASE;
    $koneksi = mysqli_connect($SERVER, $USER, $PASSWORD, $DATABASE) or die(mysqli_error($koneksi));
    return $koneksi;
}

function db_exec($sql)
{
    $con = koneksi_sanggar();
    if (mysqli_query($con, $sql)) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        return false;
    }
}

function db_query($sql)
{
    $tampil = mysqli_query(koneksi_sanggar(), $sql);
    return mysqli_fetch_assoc($tampil);
}

function db_get_all($sql)
{
    $tampil = mysqli_query(koneksi_sanggar(), $sql);
    $data = [];
    while ($row = mysqli_fetch_assoc($tampil)) {
        $data[] = $row;
    }
    return $data;
}