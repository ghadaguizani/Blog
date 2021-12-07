<?php
session_start();
$_SESSION["username"]; 
$_SESSION['password'];
//$_SESSION['id_Pc'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr"> 
   <head> 
      <title>Blog</title> 
      <meta http-equiv="Content-Type" content="text/html; 
charset=utf-8" /> 
<style>
body{background-color:gray;}

</style>
   </head> 
<body> 
<center>
<?php 
$connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 
 
/* Vérification de la connexion */ 
if (!$connect) { 
   echo "Échec de la connexion : ".mysqli_connect_error(); 
   exit(); 
} 
 
if ($_FILES['photo']['error']) {  
   switch ($_FILES['photo']['error']){  
         case 1: // UPLOAD_ERR_INI_SIZE  
            echo "La taille du fichier est plus grande que la limite autorisée par le serveur (paramètre upload_max_filesize du fichier php.ini).";  
            break;  
         case 2: // UPLOAD_ERR_FORM_SIZE  
            echo "La taille du fichier est plus grande que la limite autorisée par le formulaire (paramètre post_max_size du fichier php.ini)."; 
            break;  
         case 3: // UPLOAD_ERR_PARTIAL  
            echo "L'envoi du fichier a été interrompu pendant le transfert."; 
    
            break;  
         case 4: // UPLOAD_ERR_NO_FILE  
           echo "La taille du fichier que vous avez envoyé est nulle."; 
            break;  
      }  
}  
else {  
//s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] 
//vaut 0  
   echo "Aucune erreur dans le transfert du fichier.<br />"; 
   if ((isset($_FILES['photo']['name'])&&($_FILES['photo']['error'] == UPLOAD_ERR_OK))) { 
      $chemin_destination = 'photos/'; 
      //déplacement du fichier du répertoire temporaire (stocké 
      //par défaut) dans le répertoire de destination 
      move_uploaded_file($_FILES['photo']['tmp_name'], $chemin_destination.$_FILES['photo']['name']); 
     // echo "Le fichier ".$_FILES['photo']['name']." a été copié dans le répertoire photos"; 
   } 
   else { 
      echo "Le fichier n'a pas pu être copié dans le répertoire photos."; 
   } 
} 

$id_Pc=$_SESSION['id_Pc'];
//On utilise htmlentities par mesure de sécurité Pour sécuriser à l'affichage
//ENT_QUOTES	Convertit les guillemets doubles et les guillemets simples.
//requete permet d'inserer un article dans le table article 
$requete = "INSERT INTO article (titre, date_A, contenu, Photo,id_Pc) VALUES ('".htmlentities(addslashes($_POST['titre']), ENT_QUOTES)."','".date("Y-m-d H:i:s")."','".htmlentities (addslashes($_POST['contenu']), ENT_QUOTES)."', '".$_FILES['photo']['name']."','$id_Pc')"; 
$resultat = mysqli_query($connect,$requete); 
//var_dump($resultat);
//Renvoyez l'identifiant de la dernière requête
$identifiant = mysqli_insert_id($connect); 
/* Fermeture de la connexion */ 
 
 
if ($identifiant != 0) { 
   echo "<br />Ajout du commentaire réussi.<br /><br />"; 
} 
else { 
   echo "<br />Le commentaire n'a pas pu être ajouté.<br /><br />"; 
} 
mysqli_close($connect);
?> 
<a href="blog.php" >Cliquez ici pour voir votre article partagé</a> 
</center>
</body> 
</html>