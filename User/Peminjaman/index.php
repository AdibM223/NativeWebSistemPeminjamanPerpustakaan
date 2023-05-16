<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="../css/style-sidebar.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar" style="background-color: #071c47">
    <div class="logo-details">
      <i class='circle'></i>
        <div class="logo_name">YOGYA Library</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li >
        <a href="../home.php" style="background-color: #096ca5">
          <i class='bx bx-grid-alt' style="background-color: #096ca5"></i>
          <span class="links_name" >Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="../buku/daftar_buku_user.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Daftar Buku</span>
       </a>
       <span class="tooltip">Daftar Buku</span>
     </li>
     <li>
       <a href="index.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Peminjaman</span>
       </a>
       <span class="tooltip">Peminjaman</span>
     </li>
     <li>
       <a href="../logout.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Logout</span>
       </a>
       <span class="tooltip">Logout</span>
     </li>
     
     <li class="profile">
         <div class="profile-details">
           <!--<img src="profile.jpg" alt="profileImg">-->
           <div class="name_job">
            <?php  
        include ('../config.php');
        $q1 = mysqli_query($conn, "select * from user");
        $read = mysqli_fetch_array($q1);
        ?>
             <div class="name"><?php echo $_COOKIE['nama'] ?></div>
             <div class="job"><?php echo $read['jenis_user']; ?></div>
           </div>
         </div>
         <i class='bx bx-log-out' id="log_out" ></i>
     </li>
    </ul>
  </div>
  <section class="home-section" style="background-color: #096ca5">
      <div class="text" style="color: white;">PEMINJAMAN</div>

<div class="container" style="margin-top: 80px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: lightblue">
                    <div class="card-header">DAFTAR PEMINJAMAN BUKU</div>

                    <div class="card-body" style="background-color: white;">
                    <form action="index.php" method="get">
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                <th scope="col">ID Buku</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Jenis Buku</th>
                                    <th scope="col">TahunTerbit</th>
                                    <th scope="col">Status Peminjaman</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                            <?php 
                            include('koneksi.php');

        $data = mysqli_query($conn, "select * from buku where status='Tersedia'"); 
             
    while($row = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $row['id_buku'] ?></td>
        <td><?php echo $row['nama_buku']?></td>
        <td><?php echo $row['jenisbuku']?></td>
        <td><?php echo $row['Tahunterbit']?></td>
        <td><?php echo $row['status']?></td>
        <td class="text-center">
            <?php
        $query = mysqli_query($conn,"SELECT * FROM buku WHERE `status` LIKE 'Tersedia%'"); 
        if ($query) {
            # code...
            ?>
            <a href="booking.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-success">BOOKING</a>
            <?php
        }else{
            echo "Buku sudah terpinjam";
        }
            ?>
       
    </tr>
    <?php } ?>
</table>
                                

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

</body>
</html>
  </section>

  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
