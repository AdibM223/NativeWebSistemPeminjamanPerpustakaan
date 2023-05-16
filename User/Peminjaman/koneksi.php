<?php
//variable
$servername = "localhost";
$username = "root";
$password = "";
$database = "perpus_dummy";

//koneksi
$conn = new mysqli($servername, $username, $password, $database);

//cek koneksi
if ($conn->connect_error){
    die("koneksi gagal: ".$conn->connect_error);
}else{
    echo "koneksi berhasil";
}
?>