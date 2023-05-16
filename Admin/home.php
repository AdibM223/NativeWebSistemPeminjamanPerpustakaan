<?php  
	session_start();
	if (!isset($_SESSION['username'])) {
    $namaku = $_COOKIE['nama'] ?? 'Uknown';
		header("Location: login.php");
	}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="css/style-sidebar.css">
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
        <a href="home.php" style="background-color: #096ca5">
          <i class='bx bx-grid-alt' style="background-color: #096ca5"></i>
          <span class="links_name" >Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="buku/data_buku.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Daftar Buku</span>
       </a>
       <span class="tooltip">Daftar Buku</span>
     </li>
     <li>
       <a href="Peminjaman/Peminjaman.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Peminjaman</span>
       </a>
       <span class="tooltip">Peminjaman</span>
     </li>
     <li>
       <a href="pengembalian.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Pengembalian</span>
       </a>
       <span class="tooltip">Pengembalian</span>
     </li>
     <li>
       <a href="Membership/TampilanMember.php" style="background-color: #096ca5">
         <i class='bx bx-pie-chart-alt-2' style="background-color: #096ca5"></i>
         <span class="links_name">Daftar Member</span>
       </a>
       <span class="tooltip">Daftar Member</span>
     </li>
     <li>
       <a href="logout.php" style="background-color: #096ca5">
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
        include ('config.php');
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
      <div class="text" style="color: white;">HOME</div>

      <section class="service">
		<div class="container">

			<div class="box" >
				<table style="text-align: center; margin-top: 5%;">
					<tr>
						<td>
							<div class="col-4"><a href="buku/data_buku.php">
								<div class="icon" ><img src="images/bookshelf.png" style="width: 200%;"></div>
					<h4 style="color: white;">DATA BUKU</h4>
							</a>
					
					</div>
						</td>
						<td>
							<div class="col-4"><a href="Peminjaman/Peminjaman.php">
								<div class="icon"><img src="images/booking.png" style="width: 200%;"></div>
					<h4 style="color: white; ">PEMINJAMAN</h4>
							</a>
					
				</div>	
						</td>
						<td>
							<div class="col-4"><a href="pengembalian.php">
								<div class="icon"><img src="images/schedule.png" style="width: 200%;"></div>
					<h4 style="color: white;">PENGEMBALIAN</h4>
							</a>
					
				</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="col-4"><a href="Membership/TampilanMember.php">
								<div class="icon"><img src="images/id.png" style="width: 200%;"></div>
					<h4 style="color: white;">DATA MEMBER</h4>
							</a>
					
				</div>	
						</td>
						<td>
							
						</td>
						<td>
							<div class="col-4"><a href="login.php">
								<div class="icon"><img src="images/logout.png" style="width: 200%;"><br><h4 style="color: white; margin-left: 40px;">LOGOUT</h4></div>
					
							</a>
					
				</div>	
						</td>
					</tr>
				</table>	
			</div>
		</div>
	</section>

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
