<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 

  /* Vérification de la connexion */ 
  if (!$connect) { 
     echo "Échec de la connexion : ".mysqli_connect_error(); 
     exit(); 
  } 
  $test =  $_GET['a'];
  //requete permet de sélectionner tous de la table commentaire dont la condition entré est vérifié , et les données sont triés par ordre decroissant
  $requete = "SELECT * FROM commentaires where id_A=$test ORDER BY date_commentaire DESC "; 
  if ($resultat = mysqli_query($connect,$requete)) { 
     //date_default_timezone_set('Europe/Paris'); 
     /* fetch le tableau associatif */ 
     


     while ($ligne = mysqli_fetch_assoc($resultat)) {
         
        echo "<b><p  style='font-size:17px ;padding-left:30px;font-family: cursive;'>Pseudo:</b><p>".$ligne['auteur']."</p></p>"; 
        echo "<b><p  style='font-size:17px ;padding-left:30px;font-family: cursive;'>Contenu de commentaire:</b><p>".$ligne['commentaire']."</p></p>"; 
       // echo"<div style='margin-left:120px'><a href='suppcom.php?c=".$ligne['id']."'>Supprime commentaire</a></div><br>";

  }
   }
  
 ?>