<?php 
 require_once 'header.php';

?>


	<div class="wrapper">

		<div class="login">
			<form action="includes/login.inc.php" method="POST">
				<h1>Welcome back!</h1>
				<hr>
				        <?php  
			        	if (isset($_GET['error'])) {
			        		if ($_GET['error'] == "wrongPwd") {
			        			echo "<p>Login Error(Wrong Password)</p>";
			        		}else if ($_GET['error'] == "noUser") {
			        			echo "<p>Login Error(No user found)</p>";
			        		}
			        		else if ($_GET['error'] == "invalidemail&fullname") {
			        			echo "<p>Sign Up Error</p>";
			        		}
			        		else if ($_GET['error'] == "emptyfields") {
			        			echo "<p>All spaces required</p>";
			        		} 
			        		else if ($_GET['error'] == "sqlError") {
			        			echo "<p>Sql_error(Contact Admin)</p>";
			        		}
			        		 		
			        	} else if (isset($_GET['login'])) {

			        			echo "<p>login Successful</p>";
			        		}
        ?>
				<div class="input-field">
					<i class="mdi-social-person-outline prefix float-right"></i>
					<input class="" required name="useremail" id="useremail" type="text" placeholder="Enter your email or username..">
					<label for="useremail" data-error="wrong" data-success="right" class="center-align"></label>
				</div>

				<div class="input-field">
					<i class="mdi-action-lock-outline prefix float-right"></i>
					<input id="password" name="userpwd" type="password" placeholder="password">
					<label for="password"></label>
				</div><br>

				<a href="#" id="forgot">Forgot password?</a>

				<div class="input-field">
					<input type="checkbox" id="remember-me" />
					<label for="remember-me">Remember me</label>
				</div>

				<div class="input-field">
					<button class="btn waves-effect waves-light" type="submit" name="login-submit">Login</button>
				</div>

				<p class="reg">
					Don't have an account?
					<a href="signup.php" id="register">Sign up!</a><br><br>
				</p>

				<br>
				<br>
			</form>
		</div>


<?php 
 require_once 'footer.php';
 

?>