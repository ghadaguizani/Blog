<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}?>
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
/*lorsque la fenêtre du navigateur mesure 1115 px de large ou moins ;la largeur de div qui a pour id #MonFormulaire devient 500px */
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
          <form id="form-id" method="post" action="insertionArticle.php" enctype="multipart/form-data">
            <ul>
              <li id="li-nom">
                <label for="NomArticle">Le nom de l'article</label>
                <input id="NomArticle" class="form-cadre" name="titre" type="text" required /></br>
              </li>
             
             
              <li id="ContenuArticle-li" class="">
                <textarea id="ContenuArticle" name="contenu" class="form-cadre" placeholder="Décrire ton article !" required ></textarea><br/>
              </li>
              
              <input type="file" name="photo" > 
              
                <button type="submit" id="Btn-Submit" name="ok">J'envoie mon message !</button>
              
            </ul>
          </form>
<a href="blog.php" >VISITEZ LE BLOG</a>

</div>
<script>
  
          $("#NomArticle").focusout(function() {
            if(this.value.length<1){
                $('li#li-nom').css("background-color","maroon");
                return false;
              }
              else{
                $('li#li-nom').css("background-color","green");
                return true;
              }
            });

          

          $("#ContenuArticle").focusout(function() {
            if(this.value.length<10){
                $('li#ContenuArticle-li').css("background-color","maroon");
                return false;
              }
              else{
                $('li#ContenuArticle-li').css("background-color","green");
                return true;
              }
            });


</script>
</body>
</html>