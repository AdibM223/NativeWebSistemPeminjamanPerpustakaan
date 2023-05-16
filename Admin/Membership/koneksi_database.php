<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpus_dummy";
//buat koneksi
$conn = new mysqli($servername, $username, $password, $database);
//periksa koneksi 
if ($conn->connect_error) {
    # code...
    die("koneksi gagal:" . $conn->connect_error);
} else {
    echo "";
}