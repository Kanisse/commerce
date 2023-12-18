

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="css/tiny-slider.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
	</head>

    <body>


<form action="connexion.php" method="post">
                <div class="row">
                  <div class="col-4"></div>
                  <div class="col-4">
                  <div class="form-group">
                  <label class="text-black" >Login</label>
                  <input type="text" name="login" class="form-control" id="email">
                </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-4"></div>
                  <div class="col-4">
                  <div class="form-group mb-5">
                  <label class="text-black" for="message">Mot de passe</label>
                  <input type="password" name="mdp" class="form-control" id="message">
                </div>
                </div>
                  </div>

                  <div class="row">
                  <div class="col-4"></div>
                  <div class="col-4">
                  <input name = "connect" value="Se connecter" type="submit" class="btn btn-primary-hover-outline" >
              </form>
                </div>
                  </div>

                </div>

           
<?php 
$mysql = new mysqli("localhost", "root", "", "commerce");
$result = $mysql->query("select * from utilisateurs");
$row = $result -> fetch_assoc();
if(isset($_POST["connect"])){
    $login = $_POST['login'];
    $mdp= $_POST["mdp"];

    if ($login==$row['login'] && $row['mdp'] == md5($mdp) ){
      session_start();
      $_SESSION['login'] = $login;
      header("Location: index.php");
    }
    else{
        echo "<script>alert('erreur de connexion')</script>";
    }
    

}
?>     

                

                

    </body>