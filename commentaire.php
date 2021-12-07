<?php
	// Initialiser la session
	session_start();
  /*$_SESSION['titre'];
  $_SESSION['contenu'];*/
	?>
<!DOCTYPE html>
<html>
<head>
  <script lang="javascript" src="js/jquery.js"></script>
  <script lang="javascript" src="js/util.js"></script>
  <style>
    body{background-color:rgb(255,255,255);}
#MonFormulaire{width:50%; margin:100px 400px ; font-size:0.85em;}
#MonFormulaire ul{padding-left:0px;}
#MonFormulaire li{background-color:rgb(255,255,255); line-height:3em; border-radius:0.5em; list-style:none; padding:0.5em; margin-bottom:0.5em; transition:box-shadow 0.5s ease; border: 1px solid rgb(220,220,220);}
#MonFormulaire li:hover{box-shadow:0 0 10px rgb(180,180,180);}
#MonFormulaire li label, #MonFormulaire li input{display:inline-block;}
#MonFormulaire label{font-family:Arial; margin-left:1em; width:140px; text-align:center;  }
#MonFormulaire input{font-family:'Arial'; font-size:0.85em; width:65%; height:2.5em; border:none; text-align:center; border-left:1px solid rgb(150,150,150); margin-left:1em; background:transparent;}
#MonFormulaire textarea{font-family:'Arial'; width:98%; height:14em; font-size:0.85em; padding:0.5em; border:none; text-align:center;}

#MonFormulaire button#Btn-Submit{background-color:rgb(38,38,40); color:rgb(255,255,255); font-family:'Verdana'; font-size:1em; text-transform:uppercase; width:300px; margin:1em auto; border:none; cursor:pointer; border-radius:0.4em; transition: background 0.5s ease, border-radius 0.5s ease; padding:1em 0; float:right;}

#MonFormulaire button#Btn-Submit:hover{background-color:rgb(92,173,171); text-shadow:2px 2px 0 rgb(65,122,121); border-radius:0.6em;}

@media screen and (max-width: 1115px){
  #MonFormulaire{
    width:500px;
  }
}

body{background-image:url("img/b.jpg");background-repeat: no-repeat, repeat;background-size: cover;}



  </style>
</head>
<body>
<div id="MonFormulaire">
          <form id="form-id" method="post" action="commentaire.php?a=<?php echo $_GET['a'] ?>">
          
            <ul>
              <li id="li-nom">
                <label>Votre nom</label>
                <input  name="nom" type="text"  /></br>
              </li>
             
             
              <li id="ContenuArticle-li" class="">
                <textarea  name="commentaire" class="form-cadre" placeholder="Ecrire ton commentaire!" ></textarea><br/>
              </li>
              
              
              
                <button type="submit" id="Btn-Submit" name="ok">J'envoie mon commentaire !</button>
              
            </ul>
          </form>
          
<a href="blog.php" >VISITEZ LE BLOG</a>
</div>
<?php

include('config.php');
$nom="";
$commentaire="";
$error=array();
$msg="";

if (isset($_POST['ok'])) {
  $test =  $_GET['a'];

  
  // receive all input values from the form
    $nom = mysqli_real_escape_string($conn, $_POST['nom']);
    $commentaire = mysqli_real_escape_string($conn, $_POST['commentaire']);
    //verification de remplissage des champs
    if (empty($nom)){array_push($error,"username is required");}
    if (empty($commentaire)){array_push($error,"comment is required");}
//langeur de tableau 
    if(count($error)==0) {
     
//requete d insertion de commentaire dans la table commentaire
$req="INSERT INTO commentaires (auteur,commentaire,date_commentaire, id_A) VALUES ('$nom','$commentaire','".date("Y-m-d H:i:s")."', '$test')";
$res=mysqli_query($conn,$req);
$msg .= "<span style='color:green'>Votre commentaire a bien été posté</span>";
}else {
$msg .= "Erreur: Votre commentaire n'a pas  été posté";
 }
 echo $msg;

}

?>
</body>
</html>