<?php
session_start();
if (isset($_POST['send'])) {
	$_SESSION['nom'] = $_POST['nom'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>inscription</title>
	<center><div class="entete"><img src="logo.png" width="60" height="60"><center><H1>ROXKLITE</H1></center></div></center>
	<hr style="size:10px;">
	<center><h2><font color="green">inscription A ROXKLITE</font></h2></center>
	</head>
	<body>
		<legend><h3>information personnelle</h3></legend>
		<form  method="post" action="formulaire inscription.php" >
		
	
		<label for="nom" ><h4>entre votre nom d'utilisation:</h4></label><input  type="text" id="nom" name="nom" required ></br>
		<label for="prenom"><h4>entre votre prenom:</h4></label><input type="text" id="prenom" name="prenom" required></br> 
		<label for="email"><h4>addresse email:</h4></label><input type="email" id="email" name="email" required></br> 
		<label for="password"><h4>Mot de passe:</h4></label><input type="password" id="password" name="password" required></br> 
		<label for="confirmpassword"><h4>confirme le mot de passe:</h4></label><input type="password" id="confirmpassword" name="confirmpassword" required></br> 
		<input type="submit" value="envoye" name="send" id="send">
		</form>
		
	<?php
	
		 	if (isset($_POST['send'])) {
			 	$nom = $_POST['nom'];
			 	$prenom = $_POST['prenom'];
			 	$email = $_POST['email'];
			 	$password = $_POST['password'];
			 	$confirmpassword = $_POST['confirmpassword'];
			 	extract($_POST);
			 	
			 		if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($confirmpassword) ) {

			 			if ($password == $confirmpassword) {
			 				$options = [
			 				'cost' => 12,
			 				];
			 				$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);
			 				include 'database.php';
							global $db;
			 			
			 				$c = $db->prepare("SELECT email FROM users WHERE email = '$email'");
			 				$c->execute();
			 				$result = $c->rowCount();
			 				if ($result == 0) {
			 					$q = $db->prepare("INSERT INTO users(nom,prenom,email,password) VALUES('$nom','$prenom','$email','$hashpass')");
		 						$q->execute();
		 						$nom = $_POST['nom'];
		 						echo "<script> alert('compte cree !');</script>";
		 						header('Location: accueil.php');
		 						exit;
		 					}else{
		 						echo "<script> alert('cet email est deja utilise veillez changer!');</script>";
		 					}
		 				}else{
		 					echo "<script> alert('votre mot de passe n est pas identique');</script>";
		 				}
		 			}	
			}

   ?>
   <a href="connexion.php">vous avez deja un compte ?connectez-vous</a>
   <style>
 	label{
 		font-family:all;
 		color:white;
 		size:100px;
 		position:center;
 	}
 	body{
 		background-color:#008080;

 	}
 	input{
 		size:150px;
 		border:15px;
 		border-color:blue;
 		padding-top:10px;
 		padding-right:100px;
 		position:center;
 	}
 	legend{
 		padding-bottom:25px;
 	}
 	.send{
 		background-color:blue;
 		margin-right:0px;

 	}
 	a{
 		size:100px;
 		font-family:all;
 	}
 	.titre{
 		font-family:monospace;
 	}
 	div{
 		display:inline-flex;
 		border:50px;
 		background:#008080;
 	}
 	.formulaire{
 		align-content:center;
 	}
 	img{
 		border-style:groove;
 		border-color:green;
 	}
 	h1{
 		color:green;
 		border-style:outset;
 		border-left-color:#008080;
 	}
 	footer{
 		size:200px;
 		margin-top:300px;
 	}
 	.mail{
 		text-decoration:none;
 		color:orange;
 	}
 	a{
 		color:orange;
 	}
 </style>
 <footer> &#169; mention legal   CGV         Contact:<a class="mail" href="mailto:takueteroxilex@gmail.com">takueteroxilex@gmail.com</a> numero: 652343422</footer>
  </body>
</html>