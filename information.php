<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <title> </title>

  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"></head>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist\css\bootstrap.min.css">
  <link href='http://fonts.googleapis.com/css?family=Irish+Grover'
rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?
family=La+Belle+Aurore' rel='stylesheet' type='text/css'/>
  <style>
    
html,
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
    font-size: 62.5%;
    font-size: 10px;
}
/*-- Inspiration taken from abdo steif -->
/* --> https://codepen.io/abdosteif/pen/bRoyMb?editors=1100*/

/* Navbar section */

.nav {
    width: 100%;
    height: 70px;
    position: fixed;
    line-height: 65px;
    text-align: center;
    background-color: black;
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


/* Home section */

.home {
    width: 100%;
    height: 70vh;
    background-position: center top;
  background-size:cover;
  background-image: url(festival-carthage-2019.jpg);
}


   

.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
    
}


/* Media qurey section */

@media screen and (min-width: 768px) and (max-width: 1024px) {
    .container {
        margin: 0;
    }
}

@media screen and (max-width:768px) {
    .navTrigger {
        display: block;
    }
    .nav div.logo {
        margin-left: 15px;
    }
    .nav div.main_list {
        width: 100%;
        height: 0;
        overflow: hidden;
    }
    .nav div.show_list {
        height: auto;
        display: none;
    }
    .nav div.main_list ul {
        flex-direction: column;
        width: 100%;
        height: 100vh;
        right: 0;
        left: 0;
        bottom: 0;
        background-color: #111;
        /*same background color of navbar*/
        background-position: center top;
    }
    .nav div.main_list ul li {
        width: 100%;
        text-align: right;
    }
    .nav div.main_list ul li a {
        text-align: center;
        width: 100%;
        font-size: 3rem;
        padding: 20px;
    }
    .nav div.media_button {
        display: block;
    }
}


/* Animation */
/* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

.navTrigger {
    cursor: pointer;
    width: 30px;
    height: 25px;
    margin: auto;
    position: absolute;
    right: 30px;
    top: 0;
    bottom: 0;
}

.navTrigger i {
    background-color: #fff;
    border-radius: 2px;
    content: '';
    display: block;
    width: 100%;
    height: 4px;
}

.navTrigger i:nth-child(1) {
    -webkit-animation: outT 0.8s backwards;
    animation: outT 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(2) {
    margin: 5px 0;
    -webkit-animation: outM 0.8s backwards;
    animation: outM 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger i:nth-child(3) {
    -webkit-animation: outBtm 0.8s backwards;
    animation: outBtm 0.8s backwards;
    -webkit-animation-direction: reverse;
    animation-direction: reverse;
}

.navTrigger.active i:nth-child(1) {
    -webkit-animation: inT 0.8s forwards;
    animation: inT 0.8s forwards;
}

.navTrigger.active i:nth-child(2) {
    -webkit-animation: inM 0.8s forwards;
    animation: inM 0.8s forwards;
}

.navTrigger.active i:nth-child(3) {
    -webkit-animation: inBtm 0.8s forwards;
    animation: inBtm 0.8s forwards;
}

@-webkit-keyframes inM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes inM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes outM {
    50% {
        -webkit-transform: rotate(0deg);
    }
    100% {
        -webkit-transform: rotate(45deg);
    }
}

@keyframes outM {
    50% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(45deg);
    }
}

@-webkit-keyframes inT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes inT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes outT {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(9px) rotate(135deg);
    }
}

@keyframes outT {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(9px) rotate(0deg);
    }
    100% {
        transform: translateY(9px) rotate(135deg);
    }
}

@-webkit-keyframes inBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes inBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

@-webkit-keyframes outBtm {
    0% {
        -webkit-transform: translateY(0px) rotate(0deg);
    }
    50% {
        -webkit-transform: translateY(-9px) rotate(0deg);
    }
    100% {
        -webkit-transform: translateY(-9px) rotate(135deg);
    }
}

@keyframes outBtm {
    0% {
        transform: translateY(0px) rotate(0deg);
    }
    50% {
        transform: translateY(-9px) rotate(0deg);
    }
    100% {
        transform: translateY(-9px) rotate(135deg);
    }
}

.affix {
    padding: 0;
    background-color: #111;
}






.myH2 {
  text-align:center;
  font-size: 4rem;
}
.myP {
  text-align: justify;
  padding-left:15%;
  padding-right:15%;
  font-size: 20px;
}
@media all and (max-width:700px){
  .myP {
    padding:2%;
  }
}
.footer-distributed {
  background-color: #000;
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
  box-sizing: border-box;
  width: 100%;
  text-align: left;
  font: bold 16px sans-serif;

  padding: 55px 50px;
  margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right {
  display: inline-block;
  vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left {
  width: 40%;
}

/* The company logo */

.footer-distributed h3 {
  color: #ffffff;
  font: normal 36px "Cookie", cursive;
  margin: 0;
}

.footer-distributed h3 span {
  color: #5383d3;
}

/* Footer links */

.footer-distributed .footer-links {
  color: #ffffff;
  margin: 20px 0 12px;
  padding: 0;
}

.footer-distributed .footer-links a {
  display: inline-block;
  line-height: 1.8;
  text-decoration: none;
  color: inherit;
}

.footer-distributed .footer-company-name {
  color: #8f9296;
  font-size: 14px;
  font-weight: normal;
  margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: #5383d3;
  text-decoration: none;
}

/* Footer Right */

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {
  .footer-distributed {
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 40px;
    text-align: center;
  }


  .footer-distributed .footer-center i {
    margin-left: 0;
  }
}
.thumbnail
{
float: left;
}
.contenu1
{
margin-left: 10px;
}
.content{
      border-bottom: 1px solid #ccc;
    }
.slidebar{
      border-left: 1px solid #ccc;
    }

    *{
    box-sizing: border-box;
}

body{
    padding: 0;
    margin: 0;
}

a{
    text-decoration: none;
}

.mt-5{
    margin-top: 5rem;
}

.our-blog{
    background-color: #f8f9fa;
    padding: 100px 0;
}

.container{
    max-width: 960px;
    margin: 0 auto;
}

.row{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.text-center{
    text-align: center;
    font-size: 18px;
}

.text-center h2{
    font-weight: 500;
    font-size: 1.6em;
}

.text-center h2 span{
    font-weight: 800;
}

.text-center p{
    max-width: 500px;
    margin: 0 auto;
    color: #6c757d;
    line-height: 1.5;
    font-size: 1em;
}

.col{
    width: 33.3333333%;
    overflow: hidden;
    padding: 15px;
}

.col .card{
    width: 100%;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
    transition: transform 0.3s ease;
}

.col img{
    width: 100%;
    height: auto;
    border: 0;
}

.col .card-body{
    padding: 0 15px 15px 15px;
    background-color: #fff;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}

.card-body h5{
    font-size: 24px;
    margin: 7px 0;
}

.card:hover{
    transform: translateY(-10px);
    transition: transform 0.3s ease;
}

.card p{
    color: #6c757d;
}

.card-body .date-author span{
    color: #e74c3c;
}

.card-body h5 a{
    color: #222;
}

@media(min-width: 577px) and (max-width: 768px){
    .col{
        width: 50%;
    }
}

@media(max-width: 576px){
    .col{
        width: 100%;
    }
}
  </style>
</head>

<body>
   
 
<nav class="nav">
        <div class="container">
            <div class="logo">
                <img src="unnamed.png" style="height: 80px ; width: 150px">
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
    <section class="our-blog">
        <div class="container">
            <div class="text-center">
                <h2><span>Agenda Culturel</span></h2>
                <p> Agenda Culturel vous informe des dernières actualités culturelles. 
Concert, festival, pièce de théâtre, sortie enfant, spectacle de cirque ou encore exposition : ne manquez pas les prochains événements culturels à venir dans toute la France. 
Retrouvez également toutes les informations billetterie pour réserver vos places de concert ou place de spectacle directement en ligne.</p><br/>
               <h2> <span>Nom du Blog:</span></h2><br/>
                <p>Agenda Culturel</p><br/>
                <h2> <span>Date de Création</span></h2><br/>
                <p>29/12/2020</p><br/>
                <h2> <span>Dernier Mise à jours</span></h2><br/>
                <p>
                 <?php
                  require('config.php');
                  //requete qui permet de sélectionner la date de derniér article posté
                 $query="SELECT date_A FROM article WHERE date_A IN (SELECT max(date_A) FROM article)";
                 $result = mysqli_query($conn,$query) or die(mysqli_error());
                
                 if(mysqli_num_rows($result)!=0)
                   {
                    while($res_array=mysqli_fetch_assoc($result))   {
                      echo"<p>".$res_array['date_A']."</p>";

                         }
                   }

                  ?>
                  

                  <h2> <span>Statistiques</span></h2><br/>
                  
                  <?php 
                  //requete qui permet de compter le nombre d articles présents dans le blog
                    $query1="SELECT count(*) as nombre FROM article";
                $result1 = mysqli_query($conn,$query1) or die(mysqli_error());
                
                 if(mysqli_num_rows($result1)!=0)
                   {
                    while($res_array1=mysqli_fetch_assoc($result1))   {
                      echo"
                <p>le nombre des articles : ".$res_array1['nombre']." </p><br/>";
                   

                         }
                   }
                    //requete qui permet de compter le nombre de commentaires présents dans le blog

                   $query2="SELECT count(*) as nombreCommentaires FROM commentaires";
                   $result2 = mysqli_query($conn,$query2) or die(mysqli_error());
                   
                    if(mysqli_num_rows($result2)!=0)
                      {
                       while($res_array2=mysqli_fetch_assoc($result2))   {
                         echo"
                   <p>le nombre de commentaires : ".$res_array2['nombreCommentaires']." </p><br/>";
                       }
                    }
                
               
                
               
                ?>
            </div>
           
</body>
</html>
