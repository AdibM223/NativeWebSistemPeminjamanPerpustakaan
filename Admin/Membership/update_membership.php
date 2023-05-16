<?php 
include('koneksi_database.php');

//updet data
$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['Password'];
$username = $_POST['username'];
$no_telpon = $_POST['no_telpon'];


$query = "update user set nama='$nama',alamat='$alamat',email='$email',Password=md5('$password'),username='$username',no_telpon='$no_telpon' where id_user='$id_user'";

if ($conn->query($query)) {
    # code...
    header("location: TampilanMember.php");
} else {
    # code...
    echo "Data Gagal Di update";
}


?>