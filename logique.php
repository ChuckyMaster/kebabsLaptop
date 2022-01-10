<?php


require_once 'db.php';

var_dump($_GET);




$sauces = [
    1 => "Harissa",
    2 => "Mayo",
    3 => "Ketchupy"

];



$viandes = [
1 => "Sanglier",
2 => "Agneau",
3 => "Mouton"

];


$difficulty = [
    1 => "Facile",
    2=> "intermédiaire",
    3 => "dur",
    4 => "Super dur"
];


//Verif get id, pour afficher un article
if(isset($_GET['id'])
&& !empty($_GET['id'])
){
   
$id = htmlspecialchars($_GET['id']);


$sqlDisplayOne = "SELECT kebab.id, kebab.sauce, kebab.viande, kebab.garniture, kebab.difficulty FROM kebab WHERE id = $id";
$result = mysqli_query($accessDataBase, $sqlDisplayOne);
$kebab = $result->fetch_assoc();
// header("Location: http://localhost/PhpProceduraleCours/kebabs/kebab.php?id=$id");
} else {
    $sqlDisplay ="SELECT * FROM kebab";
    $kebabs = mysqli_query($accessDataBase, $sqlDisplay);
};











?>