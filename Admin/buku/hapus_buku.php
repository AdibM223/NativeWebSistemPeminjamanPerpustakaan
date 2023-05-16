<?php
    include('koneksi.php');
    //get id

    $id = $_GET['id'];

    $query = "DELETE FROM buku WHERE id_buku = '$id'";

    if ($conn->query($query)) {
        # code...
        header("location:data_buku.php");
    }
    else{
        echo"Data Gagal Dihapus";
    }
?>