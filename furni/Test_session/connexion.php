<?php
session_start();
$_SESSION['login']="Admin";
header("Location: index.php");

