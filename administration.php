<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="ajout/css/toggle-switch.css" />
  <link rel="stylesheet" type="text/css" href="ajout/css/bootstrap.css"/>
  <link rel="stylesheet" type="text/css" href="ajout/css/bootstrap-theme.css"/>
  <link rel="stylesheet" type="text/css" href="ajout/css/bulletin.css"/>
      <link rel="stylesheet" type="text/css" href="style.css"/>
  <script type="text/javascript" src="ajout/js/jquery.js"></script>
    <script type="text/javascript" src="ajout/js/bootstrap.js"></script>
	<style>
		.nav {
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    background-color: black;

}
		* {
  box-sizing: border-box;
}
body {
  margin: 0;
  font-family: sans-serif;
}
a {
  color: #666;
  font-size: 14px;
  display: block;
}

#login-page {
  display: flex;
}
.notice {
  font-size: 13px;
  text-align: center;
  color: #666;
}
.login {
  width: 30%;
  height: 100vh;
  background: #FFF;
  padding: 70px;
}


.background {
  width: 70%;
  padding: 40px;
  height: 100vh;
  background: linear-gradient(60deg, rgba(158, 189, 19, 0.5), rgba(0, 133, 82, 0.7)), url('david-calderon-973699-unsplash.jpg') center no-repeat;
  background-size: cover;
  display: flex;
  flex-wrap: wrap;
  align-items: flex-end;
  justify-content: flex-end;
  align-content: center;
  flex-direction: row;
}
.background h1 {
  max-width: 420px;
  font-size: 20px;
  color: #FFF;
  text-align: right;
  padding: 0;
  margin: 0;
}
.background p {
  max-width: 650px;
  color: #1a1a1a;
  font-size: 15px;
  text-align: right;
  padding: 0;
  margin: 15px 0 0 0;
}

  .box {
  border: 1px solid #c4c4c4;
  padding: 30px 25px 10px 25px;
  background: white;
  margin: 30px auto;
  width: 360px;
  margin-left:0px;
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
.nav div.logo {
    float: left;
    width: auto;
    height: auto;
    padding-left: 3rem;
}

.nav div.logo a {
    text-decoration: none;
    color: #fff;
    font-size: 2.5rem;
}

.nav div.logo a:hover {
    color: #00E676;
}

.nav div.main_list {
    height: 65px;
    float: right;
}

.nav div.main_list ul {
    width: 100%;
    height: 65px;
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
}
.nav div.main_list ul li {
    width: auto;
    height: 65px;
    padding: 0;
    padding-right: 3rem;
}

.nav div.main_list ul li a {
    text-decoration: none;
    color: #fff;
    line-height: 65px;
    font-size: 2.4rem;
}

.nav div.main_list ul li a:hover {
    color: #00E676;
}

	</style>
</head>
<body>
	<nav class="nav">
        <div class="container">
            <div class="logo">
                <img src="unnamed.png" style="height: 80px ; width: 150px;">
            </div>
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="blog.php">Home</a></li>
                    <li><a href="information.php" name="About">About</a></li>
                    <li><a href="administration.php">Administration</a></li>
                    
                </ul>
            </div>

        </div>
    </nav>

    <section class="home">
    </section>
<div id="login-page">
  <div class="login">
    <h2 class="login-title"></h2>

    <?php
require('config.php');
session_start();

if (isset($_POST['submit'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn,  $_POST['password']);
   $query = "SELECT * FROM admin WHERE username='$username' and password='$password'";
  $result = mysqli_query($conn,$query) or die(mysqli_error());
  //var_dump($result);
  $rows = mysqli_num_rows($result);
  if($rows==1){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
     $res="SELECT id_Ad FROM admin where username='$username'";
     $res=mysqli_query($conn,$res);
    
      header("Location: configuration.php");
  }else{
    $message = "Seule l'administrateur peut connecter a cette page.";
  } 
}
?>
<div><p style="font-size:15px;font-family:Georgia, serif;text-align:center;color:chocolate">Vous êtes un admin ? </p>
<p style="font-size:15px;font-family:Georgia, serif;text-align:center;color:chocolate">Remplir ce formulaire pour connecter</p>
</div>
    <form class="box" action="" method="post" name="login">

<h1 class="box-title">Connexion</h1>
<input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required>
<input type="password" class="box-input" name="password" placeholder="Mot de passe" required>
<input type="submit" value="Connexion " name="submit" class="box-button">

<?php if (! empty($message)) { ?>
    <p class="errorMessage"><?php echo $message; ?></p>
<?php } ?>
 </form>
 <p style="font-size:15px;font-family:Georgia, serif;text-align:center;color:chocolate">VOUS ÊTES L'ORGANISATEUR D'UN EVENEMENT ?</p>
 <a href="login.php"><img src="h.png" style="width:300px ;height:90px"></a>
    <div class="created">
    </div>
  </div>
  <div class="background">
    <h1>Un festival est une manifestation à caractère festif, organisée à époque fixe et récurrente annuellement, autour d'une activité liée au spectacle, aux arts, aux loisirs, d'une durée de un ou plusieurs jours.</h1>
    <p>Un festival est une manifestation à caractère festif, organisée à époque fixe et récurrente annuellement, autour d'une activité liée au spectacle, aux arts, aux loisirs, d'une durée de un ou plusieurs jours.</p>
  </div>
  
</div>

</body>
</html>