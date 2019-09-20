<?php include('server.php');
//if user isnt sign up or login he or she would acess this page!//
if (empty($_SESSION['email'])){
	header('location: login.php');
}
<!DOCTYPE html>
<html>

<head>
	<title>Welcome To Glacier</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<div class="header">
		<h2>Home Page</h2>
	</div>

	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
			<div class="error success">
				<h3>
					<?php
					    echo $_SESSION['success'];
					    unset($_SESSION['success']);
					 ?>

				</h3>
			</div>
		<?php endif ?>

		 	<?php if (isset($_SESSION["username"])): ?>
		 		<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		 		<p><a href="index.php?Logout = '1'" style="color: red;">Loginout</a></p>
		 	<?php endif ?>
	</div>
		
	

</body>

</html>