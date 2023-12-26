<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <h1>la modification d'une formation</h1>
    
<?php
if(isset($_GET['id'])){
    $id = $_GET['id']; 
    $mysql = new mysqli("localhost", "root", "", "commerce");
    $sql = "select * from produits where id = $id";
    $result = $mysql->query($sql);
    $row = $result->fetch_assoc();
}


?>
<form action="Modifier.php" method="post">
  <div class="mb-3">
    <label  class="form-label">Nom du produit</label>
    <input type="text" value="<?php echo $row['description']; ?>" name="nom" class="form-control" >
    </div>
  <div class="mb-3">
    <label class="form-label">Prix du produit </label>
    <input type="number" value ="<?php echo $row['prix']; ?>" name="prix" class="form-control" >
  </div>
  <div class="mb-3">
    <label class="form-label">Photo</label>
    <input type="file"" name="photo" class="form-control">
    
    <?php echo "<img src='images/".$row['photo']."'</h1>";?>
  <img >

</div>
  <input name="id" type="hidden" value="<?php echo $id; ?>">
  <button type="submit" name ="update" class="btn btn-primary">Submit</button>
</form>

<?php  
if(isset($_POST['update'])){
    $mysql = new mysqli("localhost", "root", "", "commerce");
    $nom= $_POST['description'];
    $prix=$_POST['prix'];
    $photo= $_POST['photo'];
    $id= $_POST['id'];
    $sql = "update produits set nom= '$nom', prix='$prix', photo='$photo' 
    where id= '$id'";
    $mysql -> query($sql);
    header("Location: shop.php");
}

?>
</body>
</html>