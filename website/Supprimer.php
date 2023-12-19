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
$mysql= new mysqli("localhost", "root", "", "commerce");
$id= $_GET['id'];
$sql= "delete from produits where id= $id ";
$mysql -> query($sql);
header ('Location: produits.php');
  
  ?>
</body>
</html>