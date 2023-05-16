<?php
include('koneksi_database.php');

//get id
$id = $_GET['id'];

$query = "delete from user where id_user=$id";

if ($conn->query($query)) {
    # code...
    header("location:TampilanMember.php");

} else {
    # code...
    echo "data gagal rek";
}
 
?>