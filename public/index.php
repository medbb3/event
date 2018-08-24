<?php 
session_start(); 
require_once __DIR__. '/../vendor/autoload.php';
require_once __DIR__. '/../src/entrer.php';
require_once __DIR__. '/../src/sortie.php';
require_once __DIR__. '/../src/session.php';
require_once __DIR__. '/../src/verifparticip.php';
require_once __DIR__. '/../src/connectiondb.php';

$pdo=connectiondb('tp5');
?> 
<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<head>
  <title></title>
</head>
<body>

<center>
<h1> Gestion d'évènement</h1>
<form method="POST" action="">
   <br>
  <br>
   <label >Entrer la date de l'evenement</label>
  <input type="date" name="date"> </input>
  <br>
   <br>
     <label >Entrer l'heure de l'evenement</label>
  <input type="time" name="time"> </input>
  <br>
   <br>
   <label >Entrer le nombre maximum des visiteur</label>
  <input type="number" name="maxi"> </input>
  <input class="btn btn-primary btn-lg" type="submit" name="Valider" value="Valider"> </input>

</form>




<?php
           var_dump($_POST['date']);
           if (isset($_POST['date'])){
          $_SESSION['date']="";
          $_SESSION['date']= $_POST['date'];
          
          }
             $date=$_SESSION['date'];
         echo "<h3><p style=color:red><strong>date est : $date</strong></p></h3>"; 


        if (isset($_POST['time'])){
          $_SESSION['time']="";
          $_SESSION['time']= $_POST['time'];
          
        }
        $time=$_SESSION['time'];
              $heure = new DateTime ($date.''.$time);
var_dump($heure);

          echo "<h3><p style=color:red><strong>l'heure est: $time</strong></p></h3>";

        if (isset($_POST['maxi'])){
          $_SESSION['maxi']=0;
          $_SESSION['maxi']=(int) $_POST['maxi'];
          
        }
        $maxi=$_SESSION['maxi'];

        echo "<h3><p style=color:red><strong>Nombre maximum de participant est : $maxi</strong></p></h3>";
?>


<br>
<center>
<h1>Inscription des visiteurs</h1>
 <form method="POST" action="">

<label >Nom</label>
<input class="" type="texte" name="nom" placeholder="nom" >
<label >Âge</label>
<input class="" type="number" name="age" placeholder="age" >
<label >E-mail</label>
<input class="" type="email" name="email" placeholder="E-mail" >
<input class="btn btn-primary btn-lg" type="submit" name="Entrer" value="Entrer">

<?php 
// récupérer les champs
if(isset($_POST['nom'])){$nom=$_POST['nom'];}
else      $nom="";

if(isset($_POST['age']))      $age=$_POST['age'];
else      $age="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

//condition sur la formulaire 
if(empty($nom)){
  echo '<h2><font color="red">Attention, le nom est vide !</font></h2>'; 
} elseif ((empty($age) OR (int)$age<15)) {

  echo '<h2><font color="red">Attention, age vide ou inferieur à 15</font><h/2>';
}elseif (empty($email)) {
  echo '<h2><font color="red">Attention, E-mail vide </font></h2>';
} else { 

                     $stmt =$pdo->prepare(
                "insert into participant(nom,age,email)
                value (:nom,:age,:email)
                 "
                );
          var_dump($nom);
                $stmt ->execute ([
                   'nom' => $nom ,
                   'age'=>$age,
                   'email'=>$email
                 ]);


    echo '<h2><font color="green">Bravo vous ête inscrit</font></h2>';

}
?>






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



sessionisset();



$maxparticipent=$_SESSION['maxi'];
$minparticipent=0;



  if(isset($_POST['Entrer'])&& !(empty($nom)) && (!(empty($age) && (int)$age>15)) && !(empty($email)))
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





