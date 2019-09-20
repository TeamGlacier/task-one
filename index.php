<?php 
    
    session_start();

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="signup.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>

<body>

	<div class="wrapper">
		<div class="image">

		</div>
		<div class="login">
			<form method="post" action="" class="form-json">
				<?php 

					if (isset($_SESSION['id'])) {
						echo"<h1>Hello User, You have successfully Logged in</h1>
										
										<hr>
				<br>
				<br>";
					}else{
						echo"<h1>Hello User, You are Logged Out!</h1>
										<hr>

				<br>
				<br>";
					}

				?>
				
				<hr>


				<br>
				<br>
			</form>
		</div>

    </div>
  
 
    

</body>

</html>