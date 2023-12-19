<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $id = $_GET['id'];
    $mysql = new mysqli("localhost", "root","","commerce");
    $sql = "select * from images where produit_id=$id";
    $result = $mysql->query($sql);
    while($row = $result -> fetch_assoc()){
        echo "<img src='images/".$row['chemin']."'>";
    }
    $sql1= "select * from produits where id=$id";
    $result = $mysql -> query($sql1);
    $row1= $result -> fetch_assoc();
    echo "<h1>".$row1['nom']."</h1>";
    echo "<h1>".$row1['prix']."</h1>";
    ?>
</body>
</html>