<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <title>Tambah Buku</title>
</head>
<body style="background-color: #096ca5;">
    <div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card" style="background-color: lightblue;">
                    <div class="card-header" align="center">TAMBAH BUKU</div>
                        <div class="card-body" style="background-color: white;">
                            <form action="simpan_buku.php" method="post">
                                <div class="form-group">
                                    <label >Nama Buku</label>
                                    <input type="text" name="nama_buku" class="form-control" placeholder="Masukkan Nama Buku">

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
                                    <label >jenis Buku</label>
                                    <input type="text" class="form-control" name="jenisbuku" placeholder="Masukkan Jenis Buku">
                                </div>
                                <div class="form-group">
                                    <label >Tahun Terbit</label>
                                    <input type="date" class="form-control" name="Tahunterbit" placeholder="Masukkan Tahun Terbit">
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