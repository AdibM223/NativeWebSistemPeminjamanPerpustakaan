<?php
    include('koneksi.php');

    $id = $_GET['id'];

    $query = "SELECT * FROM buku WHERE id_buku = $id LIMIT 1";

    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit buku</title>
</head>
<body>
<div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT BUKU
                    </div>
                    <div class="card-body">
                        <form action="update_buku.php" method="post">
                            <div class="form-group">
                                <label>Nama_buku</label>
                                <input type="text" name="nama_buku" placeholder="Masukkann Nama Buku" class="form-control" value="<?php echo $row['nama_buku']?>">
                                <input type="hidden" name="id_buku" value="<?php echo $row['id_buku']?>">
                            </div>
                            <div class="form-group">
                                    <label >Status Buku</label>
                                    <select class="form-control" name="status" >
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Dipinjam">Dipinjam</option>
                                        <option value="Dibooking">Dibooking</option>
                                    </select>
                                    
                            </div>
                            <div class="form-group">
                                <label >Jenis Buku</label>
                                <input type="text" class="form-control" name="jenisbuku" value="<?php echo $row['jenisbuku']?>">
                            </div>
                            <div class="form-group">
                                <label >tahun terbit</label>
                                <input type="date" class="form-control" name="Tahunterbit" value="<?php echo $row['Tahunterbit']?>">
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                             <button type="reset" class="btn btn-warning">Reset</button>
                            <a href="data_buku.php" class="btn btn-md btn-danger">batal</a>
                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>
</body>
</html>