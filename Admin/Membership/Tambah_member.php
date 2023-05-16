<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Tambah member</title>
    </head>
    <body>
    <style>
        body{
            background-image:url(bac.jpg);
            background-repeat: no-repeat;
        }
        .card {
            background-color: darkcyan;
        }
        </style>
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card" style="background-color: lightblue">
                        <div class="card-header">
                            Tambah Member
                        </div> 
                        <div class="card-body" style="background-color: white">
                            <form action="simpan_member.php" method="POST">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">

                                </div>
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>

                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Masukkan email"> 

                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password" id="myInput">
                                    <input type="checkbox" onclick="Tampil()">Lihat Password
                                    <script>
                                        function Tampil(){
                                            var x = document.getElementById("myInput");
                                            if (x.type === "password") {
                                                x.type = "text";
                                            } else {
                                                x.type = "password";
                                            }
                                        }
                                    </script>

                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" placeholder="Masukkan Username"> 
                                    
                                </div>
                                <div class="form-group">
                                    <label>No Telp</label>
                                    <input type="text" name="no_telpon" class="form-control" placeholder="Masukkan Nomor Telepon"> 

                                </div>
                               
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <button type="reset" class="btn btn-warning">Reset</button>
                                <a href="TampilanMember.php" class="btn btn-md btn-danger">Batal</a>
                            </form>
                            
                        </div>  
                        
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>