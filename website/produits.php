
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
    <a href="Ajouter.php" class="fa fa-plus"></a>
<?php
$mysql= new mysqli("localhost", "root", "", "commerce");

$sql= "select * from produits";
$result= $mysql->query($sql);
echo "<table class='table'><tr> <th>Name</th> <th>Price</th> <th>Quantity</th></tr>";
while($row = $result -> fetch_assoc()){
echo    "<tr>
        <td>".$row['nom']."</td>
        <td>".$row['prix']."</td>
        <td>".$row['quantite']."</td>
        <td><a href='details.php?id=".$row['id']."' class='fa fa-info'></button></td>
        <td><a href='Supprimer.php?id=".$row['id']."' class='fa fa-trash'></a></td>
        <td><a href='Modifier.php?id=".$row['id']."' class='fa fa-pencil'></button></td>
        </tr>";    
}

echo "</table>";

?>
</body>
</html>






