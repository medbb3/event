
<?php


 function verifparticip(int $max, int $nombpart) 
{
      if ( $nombpart> 0 && $nombpart < $max ) {
           echo ("Nombre de participant est : $nombpart");
      }
      if ($nombpart == $max ) {
        echo (" Attention la salle atteind son maximun $nombpart personne");
      }
      if ( $nombpart==0 || $nombpart <0 ) {
            $message= "Salle est vide" ;

          echo ($message);
      }
      if ($nombpart > $max) {
           $message= "Impossible la salle est plein";
           echo  ($message);
      } 
}

