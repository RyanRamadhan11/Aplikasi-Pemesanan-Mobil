<?php
    //deklarasi variabel
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "db_pemesanan_tiket_bus";

    $conn = new mysqli ($hostname,$username,$password,$database);

    //percabangan
    if ($conn -> connect_error){
        die("Database tidak terkoneksi".$conn -> connect_error);
    }
?>