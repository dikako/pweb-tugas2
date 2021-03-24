<?php
    $host="localhost";
    $user="root";
    $password="";
    $database="latihandb";
    $koneksi=mysql_connect($host, $user, $password);
    mysql_select_db($database, $koneksi);

    if ($koneksi) {
        echo "koneksi berhasil";
    }
    else {
        echo "koneksi gagal";
    }
?>