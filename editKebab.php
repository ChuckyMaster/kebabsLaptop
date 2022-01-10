<?php 

require_once 'db.php';


if(

    //VERIFICATION ET FILTRE INT
    !empty($_POST['viande']) && ctype_digit($_POST['viande'])
    && !empty($_POST['garniture'])
    && !empty($_POST['sauce']) && ctype_digit($_POST['sauce'])
    && !empty($_POST['difficult'])&&  ctype_digit($_POST['difficult'])
    &&  !empty($_POST['id']) && ctype_digit($_POST['id']) 
    && isset($_POST['id'])
    ) {
    
    //RECUP LES VALEUR STR DANS VARIABLES
    
    
    $viandeStr = $_POST['viande'];
    $garnitureStr = $_POST['garniture'];
    $sauceStr = $_POST['sauce'];
    $difficultStr = $_POST['difficult'];
    $id = $_POST['id'];
    
    // TRANSFORME EN INT
    
    
    $viande = (int)$viandeStr;
    $sauce = (int)$sauceStr;
    $difficulty = (int)$difficultStr;
    $garniture = htmlspecialchars($garnitureStr);
    
    //REQUETE

    $sqlEdit = "UPDATE `kebab` 
    SET `viande` = '$viande', `garniture` = '$garniture', `sauce` = '$sauce', `difficulty` = '$difficulty '
    WHERE `kebab`.`id` = '$id';";
    $check = mysqli_query($accessDataBase, $sqlEdit);
  

    header("Location: http://localhost/PhpProceduraleCours/kebabs/kebab.php?id=$id");


    }





?>