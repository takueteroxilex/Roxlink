<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
  <link rel="stylesheet" href="styles/style.css"/>
  <title>intetface de compte</title>
</head>
<body>
  <style>
  option{
background-color:yellow;
    
  }   
  select{
background-color:gray; 
  } 
input{
background-color:orange;  
}  
a{
	
	font-weight:bolder;
	

}   
li{
	text-decoration:yellow;
	transition-duration:0.4s;
	transition-delay:0.4s;
	text-decoration-line:none;
	text-decoration:none;
}
body{
     background-image:url(a.jpg);
     background-repeat:no-repeat;
     background-size: cover;  

}  
h4.titre{
	 background-color:purple;
	 font-size:50px;
	 background-repeat:no-repeat;
	 
     

}

nav.navs ul li{
	display:inline-flex;
	padding-right:30px;

}
nav.navs ul li a{
	background-color:white;
    list-style-type:none;
    text-decoration:none;
    padding:10px;



}
nav.navs ul li.btns:hover a{
	color:white;
	background-color:blue;
	transition-delay:0.3s;
}

    
  </style>  
  <center><img src="sync.ico" width="100" height="100"></center>
  <center><h4 class="titre">Echange</h4></center>
 <nav class="navs">
 	<ul>
 		<li class="btns"><a href="#">Accueil</a></li>
 		<li class="btns"><img src="cont.png"
 			width="25" height="25"><a href="">contactez-nous</a></li>
 		<li class="btns"><a href="page d'accueil.html">deconnexion</a></li>
 	</ul>
 </nav>
  <center><h3>Nouvelle transaction</h3></center>
  <center><h4>porte feuille</h4></cente>
  <input type="number" id ="solde" value="1500">
  
<select>
      <option value="etereum">etereum</option>
      <option value="avalenche">avalenche</option> 
      <option value="tronc">tronc</option>
      <option></option>      
    </select>  
  </br>
  <h4>entre l''addresse du wallet public destinateur <h4>
  <input id="destinateur" value="adresse" type="text">
    </br> 
    <center>combien voulez-vous envoyé</center>    
    <input id="soldeenvoye" value="0" type="number">
    <select>
       <option value="etereum">etereum</option>
      <option value="avalenche">avalenche</option> 
      <option value="tronc">tronc</option>
      <option></option>      
    </select>    
  <button value="send" onclick="transaction()">envoyé</button>
</body>
    <script>
function transaction(){
  solde = document.getElementById('solde').value
  soldeenvoye = document.getElementById('soldeenvoye').value
if(solde>=soldeenvoye){
 newsolde = solde-soldeenvoye
 document.getElementById("solde").value = newsolde
alert("transfers effectuer")}
if (solde<soldeenvoye){
alert("alerte solde insuffisant pour effectuer cette transaction")  
}  
}    
    </script>    
</html>
