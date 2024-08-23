<?php
session_start();
if (isset($_POST['send'])) {
	$_SESSION['nom'] = $_POST['nom'];
	setcookie('nom', $_SESSION['nom'], time() + (30 * 24 * 3600));
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>connexion</title>
	<center><div class="entete"><img src="logo.png" width="60" height="60"><center><H1>ROXKLITE</H1></center></div></center>
	<hr style="size:10px;">
</head>
<body>
	<center><h2><font color="orange"><div class="titre">CONNEXION  A ROXKLITE</div></font></h2></center>
 <div class="formulaire">
 <form method="post">
	<label>Entrer votre nom d'utilisation</label></br><input type="text" name="nom"></br>
	<label>Entrer votre email</label></br><input type="email" name="email" id="email"></br>
	<label>Entre votre mot de passe</label></br><input type="password" name="password" id="password"></br>
	<input type="submit" name="sendd" id="sendd" class="send">
</form>
</div>
	<?php
		if (isset($_POST['sendd'])) {
			extract($_POST);
			if (!empty($email) && !empty($password) && !empty($nom)) {
				include 'database.php';
				$q = $db->prepare("SELECT * FROM users WHERE email = '$email'");
				$q->execute();
			 	$result = $q->fetch();
			 	if ($result == true) {
			 		$hashpassword = $result['password'];
			 		if (password_verify($password, $hashpassword)) {
			 			header('Location: accueil.php');
			 		} else {
			 			echo "<script> alert('mot de passe incorrect');</script>";
			 		}
			 		
			 	} else {

			 		//header('Location: formulaire inscription.php');
			 		echo "<script> alert('le compte nexiste pas veillez en creer');</script>";
			 	}
			 	
			} else {
				echo "<script> alert('veillez remplir toute les champ!');</script>";	
			}
			
		}
	?>
 <a href="formulaire inscription.php">s'inscrire</a>
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
 		background-image:url(logo.png);
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
 	
 </style>
 <footer> &#169; mention legal   CGV         Contact:<a class="mail" href="mailto:takueteroxilex@gmail.com">takueteroxilex@gmail.com</a> numero: 652343422</footer>
</body>
</html>