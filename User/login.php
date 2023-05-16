
<?php  
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
	# code...
	header("Location: home.php");
}

if (isset($_POST['submit'])) {
	# code...
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "Select * from user where email='$email' and Password='$password'";
	$result = mysqli_query($conn,$sql);
	if ($result->num_rows > 0) {
		# code...
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		include ('config.php');
        $q1 = mysqli_query($conn, "select * from user where email='$email'");
        $read = mysqli_fetch_array($q1);
		setcookie('nama', $read['nama'], time() + 86400);
		header("Location: home.php");
	}
	else
	{
		echo "<script>alert('Email atau Password salah. Silahkan coba lagi')</script>";
	}
	}
	?>

<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Login User</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>

	<section class="ftco-section" style="background-image : linear-gradient(to right, #1047a3,#27afd8)">
		
			<div class="row justify-content-center" >
				<div class="col-md-12 col-lg-10" >
					<div class="wrap d-md-flex" style="border-radius: 10%; box-shadow: 2px 2px black;">
						<div class="img" style="background-image: url(images/bg1.jpg);">
							<div class="circle"></div>
							<h3 class="mb-4" style="text-align: center; color: white; font-weight : bold;">YOGYA LIBRARY</h3>
			      </div>
						<div class="login-wrap p-4 p-md-5" style="background-image : linear-gradient(to right, #1047a3,#27afd8)">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h2 class="mb-4" style="text-align: center; color: white">Login User</h2>
			      		</div>
			      	</div>
							<form action="" class="signin-form" method="post">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email</label>
			      			<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $POST['email'] ?>"required>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $POST['Password'] ?>" required>
		            </div>
		            <div class="form-group">
		            	<button name="submit" type="submit" class="form-control btn  rounded submit " style="background-image: linear-gradient(to right, #3f51b5,#8170dd); color: white; ">LOGIN</button>
		            </div>
		            <div class="form-group">
		            	
		            	 </div>
		            <div class="form-group d-md-flex">
		          </form>
		          <p class="text-center" style="color: white;">Anda Belum Mendaftar menjadi member? </p>
		          <a  href="Registrasi.php" style="color: lightblue;">Daftar Member</a>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	<div align="center" >
		<a href="../index.html">
		<button class="form-control btn  rounded submit " style="background-image: linear-gradient(to right, #3f51b5,#8170dd); color: white; width: 10%; margin-top: 5%;">KEMBALI</button>
		</a>
	</div>
	</section>
	

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

