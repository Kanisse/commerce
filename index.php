
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    
<form action="index.php" method="post">
  
  <div class="mb-3">
    <label class="form-label">Login </label>
    <input type="text" name="login" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Mot de passe  </label>
    <input type="password"  name="mdp" class="form-control">
  </div>
  <button type="submit" name ="connect" class="btn btn-primary">Submit</button>
</form>


<?php 
$mysql = new mysqli("localhost", "root", "", "commerce");
$sql = "select * from utilisateurs";
$result = $mysql->query($sql);
$row = $result -> fetch_assoc();
if(isset($_POST["connect"])){
    $login = $_POST['login'];
    $mdp= $_POST["mdp"];

    if ($login==$row['login'] && $row['mdp'] == md5($mdp) ){
header("Location: produits.php");
    }
    else{
        echo "<script>alert('erreur de connexion')</script>";
    }
    

}
?>
</body>
</html>






