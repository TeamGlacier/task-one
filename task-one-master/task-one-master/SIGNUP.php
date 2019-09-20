<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico&display=swap">
    <link rel="stylesheet" type="text/css" href="assets/css/SIGNUP.css">
	<title>REGISTER</title>
</head>
<body>
        <h1>Glacier</h1>
    <div id="container">
       
        <p id="center_heading">Get started today!</p>
        <div class="display">
            <div class="view">
                <img src="assets/imgs/image.png" alt="just_an_image">
            </div>
            <div class="view">
                <form action="SIGNUP.php" method="POST" signup>
                    <!--validation error -->
                    <?php include('errors.php'); ?>
                    <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                    <input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    <input type="password" name="password" placeholder="Password">
                    <input type="password" name="confirm_password" placeholder="Confirm password">
                    <input type="submit" name="register_btn" value="Create account">
                </form>
                <div footer>
                    <p>Already have an account? <a href="login.php">Login</a> </p>
                    <p>By creating an account, you agree to our <a href="#">terms, conditions & privacy policy</a> </p>
                </div>
               
            </div>
        </div>

    </div>
</body>
</html>