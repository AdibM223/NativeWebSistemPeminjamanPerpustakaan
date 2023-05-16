<?php  
	include('koneksi.php');
	 $q = mysqli_query($conn,"select * from user");
     $data = mysqli_fetch_array($q);
  	$tanggalku = mysqli_query($conn, "SELECT * from buku join validasi_booking on buku.id_buku = validasi_booking.id_buku where status = 'Dibooking'");
  	$tanggal = mysqli_fetch_array($tanggalku);
    //get data form tambah_siswa
    $tanggalpinjam= $tanggal['tanggal_pinjam'];
    $iduser= $data['id_user'];
	//get data
	$id = $_GET['id'];

	//query insert
	$query = "delete from validasi_booking where id_buku= '$id'";
	$query2 = "update buku set status='Dipinjam' where id_buku='$id'";
	$query3 = "insert into riwayat_pinjam( tanggal_pinjam, id_buku, id_user) values ('$tanggalpinjam', '$id', '$iduser')";

	//pengecekan gagal atau berhasil
	if ($conn->query($query)) {
		if ($conn->query($query2)) {
			if ($conn->query($query3)) {
				header("location:Peminjaman.php");
			}	
		}
	}
	else
	{
		echo "Data gagal diinput";
	}

?>