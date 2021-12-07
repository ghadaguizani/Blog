<?php
$connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 
 
/* Vérification de la connexion */ 
if (!$connect) { 
   echo "Échec de la connexion : ".mysqli_connect_error(); 
   exit(); 
} 
$test =  $_GET['a'];
//requete permet de supprimer de la table article dont la condition entré est vérifiée 
$req="delete from article where id_A= $test";
$res=mysqli_query($connect,$req);
header("location:configuration.php");
?>