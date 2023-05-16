<?php  
	include ('config.php');

	//get data
	$id = $_GET['id'];

	//query insert
	$query = "delete from riwayat_pinjam where id_buku= '$id'";
	$query2 = "update buku set status='Tersedia' where id_buku='$id'";

	//pengecekan gagal atau berhasil
	if ($conn->query($query)) {
		if ($conn->query($query2)) {
			header("location:pengembalian.php");
		}
		
	}
	else
	{
		echo "Data gagal dihapus";
	}

?>