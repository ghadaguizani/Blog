<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Voici les articles ajoutés</p>
    <?php 
   $connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 
 
   /* Vérification de la connexion */ 
   if (!$connect) { 
      echo "Échec de la connexion : ".mysqli_connect_error(); 
      exit(); 
   } 
   //sélectionne tous les données de la table article triés par la date_A décroissant
   $requete = "SELECT * FROM article ORDER BY date_A DESC"; 
   if ($resultat = mysqli_query($connect,$requete)) { 
      /* fetch le tableau associatif */ 
      while ($ligne = mysqli_fetch_assoc($resultat)) {
          //Renvoie un nouvel objet DateTime formaté selon le format spécifié: 
         $dt_debut = date_create_from_format('Y-m-d H:i:s', $ligne['date_A']); 
         echo "<center><h1 style='color:brown'>".$ligne['titre']."</h1></center>"; 
         echo "<h2>Le ".$dt_debut->format('d/m/Y H:i:s')."</h2>"; 
         echo "<div style='width:100%;height:200px'><p style='font-size:17px ;padding-left:30px;font-family: cursive;'>".$ligne['contenu']."</p> </div>"; 
         if ($ligne['Photo'] != "") { 
            echo "<center><div><img ' src='photos/".$ligne['Photo']."' width='250px' height='200px'/></div></center>"; 
         } 
        
         
         echo"<div style='margin-left:120px'><a href='supprimer.php?a=".$ligne['id_A']."'>[Supprimer un article]</a></div><br>";
         echo"<div style='margin-left:120px'><a href='voircomad.php?a=".$ligne['id_A']."'>[voire les commentaires]</a></div><br>";

        
         echo "<hr />"; 
         

      } 
   }
 
 
         ?>
</body>
</html>