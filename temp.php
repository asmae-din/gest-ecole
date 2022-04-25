<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "gestion_ecole_db";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password,$dbname);


 // Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  
if (isset($_POST['login_btn'])) {
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	if (empty($uname)||empty($pass)) {
		echo'please fill in the blanks';
	}
	else{
$sql = "select * from admin where nom_prenom='$uname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "nom_prenom: " . $row["nom_prenom"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
	}
}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">Login #05</h2>
					</div>
				</div>
				<div class="row justify-content-center">
						<div class="col-md-7 col-lg-5">
							<div class="wrap">
								<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
								<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
										<div class="w-100">
											<p class="social-media d-flex justify-content-end">
												<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
												<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
											</p>
										</div>
							</div>
									<form action="#" class="signin-form" method="post">
								<div class="form-group mt-3">
									<input type="text" name="username" class="form-control" required>
									<label class="form-control-placeholder" for="username">Username</label>
								</div>
							<div class="form-group">
							<input id="password-field" name="password" type="password" class="form-control" required>
							<label class="form-control-placeholder" for="password">Password</label>
							<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
							</div>
							<div class="form-group">
								<button type="submit" class="form-control btn btn-primary rounded submit px-3" name="login_btn">Sign In</button>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50 text-left">
									<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
											<input type="checkbox" checked>
											<span class="checkmark"></span>
												</label>
											</div>
											<div class="w-50 text-md-right">
												<a href="#">Forgot Password</a>
											</div>
							</div>
						</form>
						<p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
						</div>
				</div>
					</div>
				</div>
			</div>
		</section>
		<script src="js/jquery.min.js"></script>
		<script src="js/popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>

