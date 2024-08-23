<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<center><h2><font color="green">inscription</font></h2></center>
</head>
<body>
<legend><h3>information personnelle</h3></legend>
	<form action="accueil.php" action method="post"  >
		<label for="nom" ><h4>entre votre nom:</h4></label><input  type="text" id="nom" name="nom" required ></br>
		<label for="prenom"><h4>entre votre prenom:</h4></label><input type="text" id="prenom" name="prenom" required></br> 
		<label for="email"><h4>addresse email:</h4></label><input type="email" id="email" name="email" required></br> 
		<label for="password"><h4>Mot de passe:</h4></label><input type="password" id="password" name="password" required></br> 
		<label for="cponfirmpassword"><h4>confirme le mot de passe:</h4></label><input type="password" id="confirmpassword" name="confirmpassword" required></br> 
		<input type="submit" value="envoye" name="send" id="send">
	</form>


</html>
<?php
	include 'database.php';
	global $db;

 	
 if (isset($_POST['send'])) {
 	$nom = $_POST['nom'];
 	$prenom = $_POST['prenom'];
 	$email = $_POST['email'];
 	$password = $_POST['password'];
 	$confirmpassword = $_POST['confirmpassword'];
 	extract($_POST);
 	if ($password == $confirmpassword) {
 		$options = [
 			'cost' => 12,
 		];
 		$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
 		if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($confirmpassword) ) {
 		
 		
 			$q = $db->prepare("INSERT INTO users(nom,prenom,email,password) VALUES('$nom','$prenom','$email','$hashpass')");
 			$q->execute();
 			header('Location: accueil.php');
 			exit;
 		}
 	}else{
 		echo "<script> alert('votre mot de passe n est pas identique');</script>";
 	}
 	
 	
 }
  ?> 











