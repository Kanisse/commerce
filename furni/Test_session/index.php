
<?php  
session_start();

    if(!isset($_SESSION['login'])){
echo "<h2><a href=\"connexion.php\">log in</a></h2>";
}
else {
    echo "<h2>Welcome ". $_SESSION['login'] ."</h2>";
    echo "<h2><a href='deconnexion.php'>log out</a></h2>";
}



