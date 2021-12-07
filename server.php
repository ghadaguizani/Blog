<?php
session_start();
include('config.php');
// initializing variables
$username = "";
$email    = "";
$errors = array(); 
// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);
  $date = mysqli_real_escape_string($conn, $_POST['date']);
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($date)) { array_push($errors, "date is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM personne_connecte WHERE username='$username' OR mail='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['mail'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
//requete permet l insertion de user dans la table personne_connecte
  	$query = "INSERT INTO personne_connecte (username, mail, password,date_de_naissance) 
  			  VALUES('$username', '$email', '$password','$date')";
  	mysqli_query($conn, $query);
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['success'] = "You are now logged in";
    //requete permet de sélectionner l'id_Pc de la table personne_connecte
    $res="SELECT id_Pc FROM personne_connecte where username='$username'";
     $res=mysqli_query($conn,$res);
     if(mysqli_num_rows($res)!=0)
     {
      while($res_array=mysqli_fetch_assoc($res))   {
        $id_Pc=$res_array['id_Pc'];
        $_SESSION['id_Pc']=$id_Pc;
      }
     }
  	header('location: formulaireAjout.php');
  }
}

// ... 
// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM personne_connecte WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: formulaireAjout.php');
        }else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
  ?>