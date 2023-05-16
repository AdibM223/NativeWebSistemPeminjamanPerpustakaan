<?php
//include ke database
include('koneksi_database.php');

//get data from tambah_siswa
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = md5($_POST['Password']);
$username = $_POST['username'];
$no_telpon = $_POST['no_telpon'];
$jenis_user= $_POST['jenis_user'];

//query insert
$query = "insert into user(nama,alamat,email,Password,username,no_telpon,jenis_user) values ('$nama','$alamat','$email','$password','$username','$no_telpon','Member')";

//pengecekan ketika gagal dan berhasil

if ($conn->query($query)) {
    # code...
    header("location:TampilanMember.php");
    
} else {
    # code...
    echo "data gagal disimpan";
}
?>