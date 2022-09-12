<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'pwpb_daftar_siswa');

$konek = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if(!$konek){
    die('Gagal terhubung dengan database: ' . mysqli_connect_error());
}

?>