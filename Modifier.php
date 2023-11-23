<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>la modification d'un produit</h1>
    
<?php 
$mysql = new mysqli("localhost", "root", "", "commerce");
$id = $_GET['id'];
$sql = "select * from produits where id = $id";
$result = $mysql->query($sql);
$row = $result->fetch_assoc();
?>
<form action="Modifier.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Nom du produit</label>
    <input type="text" value="<?php echo $row['nom']; ?>" name="nom" class="form-control" >
    </div>
  <div class="mb-3">
    <label class="form-label">Prix du produit </label>
    <input type="number" value ="<?php echo $row['prix']; ?>" name="prix" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Quantité du produit </label>
    <input type="number"  value ="<?php echo $row['quantite']; ?>" name="quantite" class="form-control">
  </div>
  <button type="submit" name ="insert" class="btn btn-primary">Submit</button>
</form>

</body>
</html>