<!DOCTYPE html>
<html>
<head>
  
     <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="footer, address, phone, icons" />

  <title>Blog </title>

  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css"></head>
  
  <style>
    
html,
body {
    margin: 0;
    padding: 0;
    /*La box-sizingpropriété CSS nous permet d'inclure le remplissage et la bordure dans la largeur et la hauteur totales d'un élément.*/
    box-sizing: border-box;
    font-family: "Quicksand", sans-serif;
    font-size: 62.5%;
    font-size: 10px;
}


/* Navbar section */

.nav {
    width: 100%;
    height: 65px;
    position: fixed;
    line-height: 65px;
    text-align: center;
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
    /*La displaypropriété spécifie si / comment un élément est affiché.*/
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
    background-image: url(Education-artistique-culturelle.jpg);
    background-position: center top;
  background-size:cover;
}


   

.navTrigger {
    display: none;
}

.nav {
    padding-top: 20px;
    padding-bottom: 20px;
   /* -webkit-transition: all 0.4s ease;*/
    transition: all 0.4s ease;
}


/* Media qurey section */
/*La @mediarègle est utilisée dans les requêtes multimédias pour appliquer différents styles à différents types / périphériques multimédias.*/
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

.mydiv {
  visibility : hidden;
}


  </style>
</head>
<!-- <script>
  $('.navTrigger').click(function () {
    $(this).toggleClass('active');
    console.log("Clicked menu");
    $("#mainListDiv").toggleClass("show_list");
    $("#mainListDiv").fadeIn();

});

</script> -->
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
                    <li><a href="#h">Contact</a></li>
                </ul>
            </div>
           
        </div>
    </nav>

    <section class="home">
    </section>
    <script>
    
function myFunction(namediv) {

  var x = document.getElementById("myDIV"+namediv);
  var id=namediv;
  console.log(x);
 /* if (x.style.visibility === "hidden") {*/
    x.style.visibility = 'visible';
  //} 
  
  x.innerHTML="";
  $.ajax({
          url: "voircommentaire.php",
          type: "POST",
          data: {
                    
          "id":id                        },
          success: function (result) {
          // console.log(result);
           $('#myDIV'+namediv).append(result);
           
                  }

                
          });
}


</script>


    <?php 
    

   $connect = mysqli_connect("127.0.0.1", "root", "", "mini_blog"); 
 
   /* Vérification de la connexion */ 
   if (!$connect) { 
      echo "Échec de la connexion : ".mysqli_connect_error(); 
      exit(); 
   } 
 
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
         
        
         echo"<div style='margin-left:120px'><a href='commentaire.php?a=".$ligne['id_A']."'>[Ecrire un commentaire]</a></div><br>";
         //echo"<div style='margin-left:120px'><input type='button' name='voir_commentaire' value='voir_commentaire' onclick='myFunction()'></div><br>";
         echo"<div style='margin-left:120px'><button value='".$ligne['id_A']."' type='button' onclick='myFunction(".$ligne['id_A'].")' id='b1'>voir commentaire</button></div><br>";
         echo"<div id='myDIV".$ligne['id_A']."' class='mydiv' style='margin-left:120px'></div>";
         echo "<hr />"; 
      } 
   
          
   } 
  

        
        ?>
      
    
       
   

<!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

<!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                //console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>


  

 

    <footer class="footer-distributed">

      <div class="footer-left">

        <IMG SRC="unnamed.png" ALT="" WIDTH=150 HEIGHT=100>

        <p class="footer-links">
          <a href="">Home</a> |
          <a  href="information.php" >About</a> |
          <a href="">Administration</a> |
          <a  href="">Contact</a> |
          
        </p>

        <p class="footer-company-name">Decembre &copy; 2020</p>
      </div>

      <div class="footer-center" id="h">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>ISET Siliana</span> Siliana,Tunisie</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+216 88 888 888</p>
        </div>

        <div>
          <p><i class="fa fa-envelope"></i><a href="">amenibenslimen9@gmail.com</a></p> 
          <p><i class="fa fa-envelope"></i><a href="">ghadaguiz@gmail.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>Developer With</span> 
          
           <a href="https://www.facebook.com/ghada.guizani.142/"> Guizani Ghada<br></a>
            <a href="https://www.facebook.com/profile.php?id=100050721001633">Ben Slimen Ameni</a>
          
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer>

   
</body>
</html>