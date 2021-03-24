<?php
    include "koneksi.php";

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_hp=$_POST['no_hp'];
    $query=mysql_query("insert into biodata(nama, alamat, no_hp) values($nama, $alamat, $no_hp)");

    if($query) {
        echo "data berhasil diinput";
        ?><a href="tabel.php">Lihat Data</a><?php
    } else {
        echo "data gagal diinput";
        echo mysql_error();
    }
?>