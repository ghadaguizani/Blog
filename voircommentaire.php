<?php
 
   $test =  $_POST['id'];
   
      $connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 
 
 if (!$connect) { 
   echo "Échec de la connexion : ".mysqli_connect_error(); 
   exit(); 
} 
   $result="";
   //selectionne tous les elements de table article ou id_A=$test trié par ordre décroissant 
   $requete = "SELECT * FROM commentaires where id_A=$test ORDER BY date_commentaire DESC "; 
   if ($resultat = mysqli_query($connect,$requete)) { 
      //date_default_timezone_set('Europe/Paris'); 
      /* fetch le tableau associatif */ 
      


      while ($ligne = mysqli_fetch_assoc($resultat)) {
          
         $result.= "<b><p  style='font-size:17px ;padding-left:30px;font-family: cursive;'>Pseudo:</b><p>".$ligne['auteur']."</p></p>"; 
         $result.= "<b><p  style='font-size:17px ;padding-left:30px;font-family: cursive;'>Contenu de commentaire:</b><p>".$ligne['commentaire']."</p></p>"; 
      }
    } 
   
   echo $result;
   
   ?>