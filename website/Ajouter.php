<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<form action="Ajouter.php" method="post">
  <div class="mb-3">
    <label  class="form-label">description de la formation</label>
    <input type="text" name="description" class="form-control" >
    </div>
  <div class="mb-3">
    <label class="form-label"> tarif de la formation </label>
    <input type="number" name="tarif" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label"> photo de la formation </label>
    <input type="file" name="photo" class="form-control" >
  </div>
  <button type="submit" name ="insert" class="btn btn-primary">Submit</button>
</form>


<?php

if(isset($_POST['insert'])){
    $mysql= new mysqli("localhost", "root", "", "commerce");
    $nom= $_POST['description'];
    $prix=$_POST['tarif'];
    $photo= $_POST['photo'];
    $destination = 'images/';
    $file_name= $_FILES["photo"]["name"];
    $chemin= $destination.$file_name;
    move_uploaded_file($_FILES["photo"]["name"],$chemin);
    $sql = "insert into produits(description, prix, photo) 
    values ('$nom', '$prix','$photo')";
    $mysql -> query($sql);
    header('Location: index.php');


}

?>
</body>
</html>