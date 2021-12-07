<!DOCTYPE html>
<html>
<head>
  
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajout/css/toggle-switch.css" />
  <link rel="stylesheet" type="text/css" href="ajout/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="ajout/css/bootstrap-theme.css"/>
  <link rel="stylesheet" type="text/css" href="ajout/css/bulletin.css"/>
      <link rel="stylesheet" type="text/css" href="style.css"/>
  <script type="text/javascript" src="ajout/js/jquery.js"></script>
    <script type="text/javascript" src="ajout/js/bootstrap.js"></script>
    

    

    

<style>
    body{background-image:url("img/p.jpg");background-repeat: no-repeat, repeat;background-size: cover;height:740px;width:65%}
    .c1{
        margin-top: 80px;

   margin-left: 300px; 
  width:300px
  
    }
    h2{
        color: aliceblue;
    }

    .p3{
        color:blanchedalmond;
        font-size: 13px;
        

       
    }
 
    .cnx{
        position:relative;
       /* bottom:0;*/
        left:780px;
        bottom:350px;
        width:700px;
    }
    /* pour le bouton */
    .b1{
background-color:black;
    }
    
    .box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: white;
  margin: 30px auto;
  width: 360px;
  margin-left:330px;
}
h1.box-title {
  color: #AEAEAE;
  background: black;
  font-weight: 300;
  padding: 15px 25px;
  line-height: 40px;
  width:360px;
  font-size: 25px;
  text-align:center;
  margin: -27px -26px 26px;

}
.box-input {
  font-size: 14px;
  background: #fff;
  border: 1px solid #ddd;
  margin-bottom: 25px;
  padding-left:10px;
  border-radius: 5px;
  width: 280px;
  height: 50px;
}
.box-button {
  border-radius: 5px;
  background: black;
  text-align: center;
  cursor: pointer;
  font-size: 19px;
  width: 100%;
  height: 51px;
  padding: 0;
  color: #fff;
  border: 0;
  outline:0;
}
.box-register
{
  text-align:center;
  margin-bottom:20px;
   margin-top:20px;
}

</style>
</head>
<body>
    <div class="container">
        
            <div class="c1">
                <h2>La spécialiste de la communication culturelle</h2>
                <p class="p3">
                    Espace Culturel est spécialisé dans la communication culturelle, qu'elle soit sur internet ou mobile. Espace Culturel développe des solutions dédiées aux professionnels de la culture.
                </p>

           </div>

   <div class="cnx">
          
<?php
require('config.php');
session_start();

if (isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $password_crypte=md5($password);
  //first check the database to make sure 
  // a user  exist with the same username and password
   $query = "SELECT * FROM `personne_connecte` WHERE username='$username' and password='$password_crypte'";
  $result = mysqli_query($conn,$query) or die(mysqli_error());
  //var_dump($result);
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      //requete permet de sélectionner l id de la personne connecté de la table personne_connecte lorsque le username est 
      //identique a celui entré par l utilisateur
     $res="SELECT id_Pc FROM personne_connecte where username='$username'";
     $res=mysqli_query($conn,$res);
     if(mysqli_num_rows($res)!=0)
     {
      while($res_array=mysqli_fetch_assoc($res))   {
        $id_Pc=$res_array['id_Pc'];
        $_SESSION['id_Pc']=$id_Pc;
      }
     }
      header("Location: formulaireAjout.php");
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  } 
}
?>



<form class="box" action="" method="post" name="login">

<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required>
<input type="password" class="box-input" name="password" placeholder="Mot de passe" required>
<input type="submit" value="Connexion " name="submit" class="box-button">
<p class="box-register">Vous êtes nouveau ici? <a href="register.php">S'inscrire</a></p>
<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
</form>
</body>
</html>