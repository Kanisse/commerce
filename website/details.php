<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    require_once("connexion.php") ;
   if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from produits where id=$id";
    $result = $mysql->query($sql);
    
    $row= $result -> fetch_assoc();
    echo "<h1> Le Nom : ".$row['Nom']."</h1>";
    echo "<h1> Le prix : ".$row['prix']."</h1>";
    echo "<h1> La quantité disponible : ".$row['Quantite']."</h1>";
    //echo "<img src='images/".$row['photo']."'</h1>";
}
    ?>
  
    

<form action ="details.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>">
<input placeholder = "veuillez saisir la quantité "type="number" name="Q">
<input type="submit" name="cart" value="Ajouter au panier">

</form>

<?php
if(isset($_POST["cart"])){
    $Q= $_POST['Q'];
    $id = $_POST['id'];
$mysql -> query("INSERT INTO panier (id_produit, Quantity) values ('$id', '$Q')");
}
?>

</body>
</html>