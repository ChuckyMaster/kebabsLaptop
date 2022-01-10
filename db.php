<?php

$host = "localhost";
$username = "poisson";
$password ="thon";
$db = "kebabs";


$accessDataBase = mysqli_connect($host, $username, $password, $db);

if(!$accessDataBase) {
    echo "DOUX JESUS !!  problem with connexion";
}



?>