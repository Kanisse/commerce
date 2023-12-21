<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
//echo "le produit que je veux supprimer a le id égal à: ".$_GET['id'];
require_once("connexion.php");
$id= $_GET['id'];
$sql= "DELETE FROM produits WHERE id= $id ";
$mysql -> query($sql);
header ('Location: index.php');
  
  ?>
</body>
</html>