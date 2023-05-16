<?php
    include('koneksi.php');

    //get data
    $id_buku = $_POST['id_buku'];
    $nama = $_POST['nama_buku'];
    $status = $_POST['status'];
    $jenis = $_POST['jenisbuku'];
    $tahun = date('Y',strtotime($_POST['Tahunterbit']));

    $query = "UPDATE buku SET id_buku='$id_buku', nama_buku='$nama', status='$status' , jenisbuku='$jenis', Tahunterbit='$tahun' WHERE id_buku = '$id_buku'";

    if ($conn->query($query)) {
        # code...
        header("location:data_buku.php");
    }
    else{
        echo"Data Gagal Diupdate";
    }
?>