<?php 
// include database
include('koneksi.php');
//get data dri tambah_buku
$nama =$_POST['nama_buku'];
$status =$_POST['status'];
$jenis=$_POST['jenisbuku'];
$tahuns=date('Y-m-d', strtotime($_POST['Tahunterbit']));
//query insert 
$query="insert into buku (nama_buku,status,jenisbuku,Tahunterbit) values ('$nama','$status','$jenis','$tahuns')";

if ($conn->query($query)) {
    # code...
    header("location:data_buku.php");
}
else{
    echo"gagal tersimpan";
}
?>