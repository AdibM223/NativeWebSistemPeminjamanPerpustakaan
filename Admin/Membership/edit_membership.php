<?php 
    include('koneksi_database.php');

    $id =$_GET['id'];
    $query = "select * from user where id_user = $id limit 1";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
   
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <title>Edit member</title>
    </head>
    <body style="background-color: #096ca5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card" style="margin-bottom: 20px; margin-top: 20px; background-color: lightblue">
                    <div class="card-header">
                        Edit Membership
                    </div>
                  <div class="card-body" style="background-color: white">
                      <form action="update_membership.php" method="post">
                          <div class="form-group">
                              <label >Nama</label>
                              <input type="text" name="nama" placeholder="Masukkan nama member" class="form-control" value="<?php echo $row['nama']?>">
                              <input type="hidden" name="id_user" value="<?php echo $row['id_user']?>">  
                            </div>
                          <div class="form-group">
                              <label >Alamat</label>
                              <textarea class="form-control" name="alamat" placeholder="masukkan alamat siswa" rows="4"><?php echo $row['alamat']?></textarea>
                          </div>
                          <div class="form-group">
                              <label >Email</label>
                              <input type="text" name="email" placeholder="Masukkan Email" class="form-control" value="<?php echo $row['email']?>">
                          </div>
                          <div class="form-group">
                              <label >Password</label>
                              <input type="password" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo $row['Password']?>" id="myInput">
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
                              <label >Username</label>
                              <input type="text" name="username" placeholder="Masukkan username" class="form-control" value="<?php echo $row['username']?>">
                          </div>
                          <div class="form-group">
                              <label >No Telpon</label>
                              <input type="text" name="no_telpon" placeholder="Masukkan username" class="form-control" value="<?php echo $row['no_telpon']?>">
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