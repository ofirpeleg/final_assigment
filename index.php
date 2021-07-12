<?php 

include 'db.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php?Id=$user_id&Name=$username&type=$type");
}


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM tbl_users_214 WHERE email='$email' AND password='$password'";
	$result = mysqli_query($connection, $sql);
	if ($result->num_rows > 0) {
	$row = mysqli_fetch_array($result);
	$user_id = $row['user_id'];
	$username = $row['username'];
	$type = $row['type'];
	$_SESSION['username'] = $row['username'];
	header("Location: home.php?Id=$user_id&Name=$username&type=$type");
}

 else {
  	echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
 	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com"> <!--font before style sheet-->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="css/style1.css">

	<title>Login Form</title>
</head>
<body class ="login">
	<div class="login_container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $password; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" id="loginSubmit" class="btn">Login</button>
			</div>

			<!-- <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p> -->
		</form>
	</div>
</body>
</html>

<?php

//close DB connection

mysqli_close($connection);

?>