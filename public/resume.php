<?php 
session_start(); 
?> 

<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<head>
	<title></title>
</head>
<body>
<!--  <?php
	// $bdd = new PDO('mysql:host=localhost;dbname=events;charset=utf8', 'root', 'root');
?>  -->
	<h2>
	<center>
<?php

		$dateevent = $_POST[dateevent] ;
		$maxi  = $_POST[maxi];
		echo "la date de l'evenement est $dateevent avec un nombre maximum de visiteur $maxi "  ;
?>
</center>
</h2>

<br>
<center>
<h1>Inscription des visiteurs</h1>
 <form method="POST" action="">

<label >Nom</label>
<input class="" type="input" name="nom" placeholder="nom" >
<label >Age</label>
<input class="" type="input" name="age" placeholder="age" >
<input class="btn btn-primary btn-lg" type="submit" name="Entrer" value="Entrer">

</form>

</center> 
<br>

<center>
<h1>Annulation d'un visiteur</h1>
<form method="POST" action="">  
<label >Nom</label>
<input class="" type="input" name="nom" placeholder="nom" >
<input class="btn btn-warning btn-lg" type="submit" name="Sortie" value="Sortie">
</form>
</center> 	

<?php 

require_once __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/../src/entrer.php';
require_once __DIR__. '/../src/sortie.php';
require_once __DIR__. '/../src/session.php';
require_once __DIR__. '/../src/verifparticip.php';

sessionisset();
var_dump($maxi);
$maxparticipent = 10;
$minparticipent=0;

	if(isset($_POST['Entrer']))
      {
      $_SESSION['participant'] = entrer($_SESSION['participant'], $maxparticipent);
      }

   if(isset($_POST['Sortie']))
    {
    $_SESSION['participant'] = sortie($_SESSION['participant'],$minparticipent);
     }

verifparticip($maxparticipent, $_SESSION['participant']);
 
	
?>



</body>
</html>

