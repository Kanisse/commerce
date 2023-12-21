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
    $id = $_GET['id'];
    $sql = "select * from produits where id=$id";
    $result = $mysql->query($sql);
    
    $row= $result -> fetch_assoc();
    echo "<h1>".$row['description']."</h1>";
    echo "<h1>".$row['prix']."</h1>";
    echo "<img src='images/".$row['photo']."'</h1>";
    ?>
</body>
</html>