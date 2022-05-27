<?php

// Konfigurasi koneksi
$host = "gojay.co.id";
$dbuser = "postgres";
$dbpass = "KinikuDbPostgres2020";
$port = "5324";
$dbname = "kula_dev";
// script koneksi php postgree
$db = new PDO ("pgsql:dbname=$dbname;host=$host",$dbuser, $dbpass);

if ($db)
{
    echo "koneksi berhasil";
}else
{
    echo "gagal melakukan koneksi";
}

?>