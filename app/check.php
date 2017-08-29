<!DOCTYPE html>

<html>
<head>
	<title>app</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<?php
//check.php

$user = null;
$pass = null;

if( isset( $_POST['champ_login'] ) && isset( $_POST['champ_pass'] ) ) {
	$user = $_POST['champ_login'];
	$pass = $_POST['champ_pass'];
}
 if ( $user == "user" && $pass == "pass" ) {
 	// Lancement de session
 	session_start();
 	// Deux variables de session
 	$_SESSION['VALIDATION_ OK'] = "BRUCE";
 	$_SESSION['AUTH'] = session_id();
 	// On redirige la requéte
 	header("Location:index.php");
 } 
 else {
	header("Location:login.php?error");
 }

 



?>
</div>
</body>
</html>