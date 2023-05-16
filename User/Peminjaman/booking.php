
<?php  
    include ('../config.php');

    //get data
    $id = $_GET['id'];

    //query insert
    $query = "insert into validasi_booking(id_buku,tanggal_pinjam) values ('$id',NOW())";
    $query2 = "update buku set status='Dibooking' where id_buku='$id'";

    //pengecekan gagal atau berhasil
    if ($conn->query($query)) {
        if ($conn->query($query2)) {
            header("location:index.php");
        }
        
    }
    else
    {
        echo "Data gagal diupdate";
    }

?>