<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>accueil</title>
	<center><div class="entete"><img src="logo.png" width="60" height="60"><center><H1>ROXKLITE</H1></center></div></center>
	<hr style="size:10px;">

</head>
<body>
	<center><h2> bienvenue <?php echo $_SESSION['nom']; ?></h2></center>
	<img src="Contact.ico" class="float" height="30" width="30">

	<style>
	.float{
	 	float:left;
	 	border:blue;
	 	position:left;

	 }
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