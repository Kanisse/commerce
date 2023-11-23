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
    <label  class="form-label">Nom du produit</label>
    <input type="text" name="nom" class="form-control" >
    </div>
  <div class="mb-3">
    <label class="form-label">Prix du produit </label>
    <input type="number" name="prix" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Quantité du produit </label>
    <input type="number"  name="quantite" class="form-control">
  </div>
  <button type="submit" name ="insert" class="btn btn-primary">Submit</button>
</form>


<?php

if(isset($_POST['insert'])){
    $mysql= new mysqli("localhost", "root", "", "commerce");
    $nom= $_POST['nom'];
    $prix=$_POST['prix'];
    $Q= $_POST['quantite'];
    $sql = "insert into produits(nom, prix, quantite) 
    values ('$nom', '$prix','$Q')";
    $mysql -> query($sql);
    header('Location: index.php');


}

?>
</body>
</html>