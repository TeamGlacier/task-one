<?php
session_start();
$username = "";
$email = "";
$errors = array();
//connect the database

$db = mysqli_connect('localhost', 'root', '', 'registration');

//if the create account button is been clicked
if(isset($_POST['register_btn'])){ 
	$username = mysqli_real_escape_string($_POST['username']);
	$email = mysqli_real_escape_string($_POST['email']);
	$password = mysqli_real_escape_string($_POST['password']);
	$confirm_password = mysqli_real_escape_string($_POST['confirm_password']);

	//each field should be filled properly
	if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($email)){
		array_push($errors, "email is required");
	}
	if (empty($password)){
		array_push($errors, "password is required");
	}
	if ($password != $confirm_password){
		array_push($errors, "The two passwords do not match");
	}

	//if no error the user is saved to the database
	if (count($errors) == 0){
		$password = md5($password);
		$sql = "INSERT INTO users (fullname, username, email, password) VALUES ('$fullname' , $username', '$email','$password')";
		mysqli_query($db, $sql);
		$_SESSION['email'] = $email;
		$_SESSION['success'] = "You are now logged in";
		header('location: index.php'); //redirect to the homepage


	}

//log user in from login page
	if (isset($_POST['login'])){
		$username = mysqli_real_escape_string($_POST['username']);
		$password = mysqli_real_escape_string($_POST['password']);

		//ensure all field are filled properly
		if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($password)){
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0){
		$password = md5($password);// encrypt the password and compare with the database
		$query = "SELECT * FROM users WHERE username= '$username' AND password= '$password'"

	}
	
  }



//logout 
if (isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: index.php');
}
?>