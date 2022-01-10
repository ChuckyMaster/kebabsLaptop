<?php
require_once 'db.php';

$editMode = false;
var_dump($_POST);






if(!empty($_GET['id']) && ctype_digit($_GET['id']) && isset($_GET['edit'])) {

  $editMode = true;
  echo "condition editer";
  require_once 'logique.php';
  
  
  
  }



if(

//VERIFICATION ET FILTRE INT
!empty($_POST['viande']) && ctype_digit($_POST['viande'])
&& !empty($_POST['garniture'])
&& !empty($_POST['sauce']) && ctype_digit($_POST['sauce'])
&& !empty($_POST['difficult'])&&  ctype_digit($_POST['difficult'])
) {

//RECUP LES VALEUR STR DANS VARIABLES


$viandeStr = $_POST['viande'];
$garnitureStr = $_POST['garniture'];
$sauceStr = $_POST['sauce'];
$difficultStr = $_POST['difficult'];

// TRANSFORME EN INT


$viande = (int)$viandeStr;
$sauce = (int)$sauceStr;
$difficulty = (int)$difficultStr;
$garniture = htmlspecialchars($garnitureStr);



//REQUETE

$sql ="INSERT INTO kebab(viande, garniture, sauce, difficulty)
VALUES ('$viande','$garniture', '$sauce', '$difficulty')";

$result = mysqli_query($accessDataBase, $sql);
$id = $accessDataBase->insert_id;

header("Location: http://localhost/PhpProceduraleCours/kebabs/kebab.php?id=$id");



}
 var_dump($editMode);

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://bootswatch.com/5/quartz/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <title>kebab</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand logo" href="index.php">Kebab - S </a>
        <ul class="d-flex">
          <li><a href="#"> Contact</a></li>
          <li><a href="#"> Menu</a></li>
          <li><a href="#"> Find us</a></li>
        </ul>
      </div>
    </nav>



    <body>
    <header
      class="d-flex justify-content-center flex-column align-items-center"
    >
      <h1>Welcome on Kebab-S Marie</h1>
      <p class="text-muted">bande d'enculer.</p>
    </header>
<!-- FORM CREATE  -->
<div class="container">



<form method="post" class="row justify-content-center align-items-center mt-5" <?php if($editMode){echo "action='editKebab.php'";}   ?> >
<!-- ----------------------------------VIANDES------------------------------------------ -->
<div class="viandes col-3 justify-content-center"> 
    <h3> Viandes</h3>
<div>
  <input type="radio" class="form-check-input" id="sanglier" name="viande" value="1" <?php if($editMode && $kebab['viande'] == 1) {
      echo "checked";
      
    } ?>
         >
  <label for="viande" class="form-check-label" >Sanglier</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="agneau" name="viande" value="2" <?php if($editMode && $kebab['viande'] == 2 ) {
      echo "checked";
      
    } ?> >
  <label for="viande" class="form-check-label">  Agneau</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="mouton" name="viande" value="3" <?php if($editMode && $kebab['viande'] == 3) {
      echo "checked";
      
    } ?>>
  <label for="viande" class="form-check-label">Mouton</label>
</div>

   </div>
<!-- -----------------------------------SAUCES------------------------------------------ -->
   <div class="sauces col-3 justify-content-center"> 
   <h3> SAUCES</h3>
   <div>
  <input type="radio" class="form-check-input" id="harissa" name="sauce" value="1" <?php if($editMode && $kebab['sauce'] == 1) {
      echo "checked";
      
    } ?>
         >
  <label for="sauce" class="form-check-label" >Harissa</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="mayo" name="sauce" value="2"  <?php if($editMode && $kebab['sauce'] == 2) {
      echo "checked";
      
    } ?>>
  <label for="sauce" class="form-check-label">  Mayo</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="ketchupy" name="sauce" value="3" <?php if($editMode && $kebab['sauce'] == 3) {
      echo "checked";
      
    } ?>>
  <label for="sauce" class="form-check-label">Ketchupy</label>
</div>
</div>

<!-- -----------------------------------DIFFICULTE------------------------------------------ -->
<div class="sauces col-3 justify-content-center"> 
   <h3> DIFFICULTY</h3>
   <div>
  <input type="radio" class="form-check-input" id="" name="difficulty" value="1" <?php if($editMode && $kebab['difficulty'] == 1) {
      echo "checked";
      
    } ?> >
  <label for="difficult" class="form-check-label" >Facile</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="mayo" name="difficult" value="2" <?php if($editMode && $kebab['difficulty'] == 2) {
      echo "checked";
      
    } ?>
     >
  <label for="difficult" class="form-check-label"  >  Intermediaire</label>
</div>

<div>
  <input type="radio" class="form-check-input" id="ketchupy" name="difficult" value="3" <?php if($editMode && $kebab['difficulty'] == 3) {
      echo "checked";
     
    } ?>>
  <label for="difficult" class="form-check-label"  >Dur</label>
</div>
<div>
  <input type="radio" class="form-check-input" id="ketchupy" name="difficult" value="4" <?php if($editMode && $kebab['difficulty'] == 4) {
      echo "checked";
     
    } ?>>
  <label for="difficult" class="form-check-label"  > très Dur</label>
</div>
<div>
  <input type="radio" class="form-check-input" id="ketchupy" name="difficult" value="5" <?php if($editMode && $kebab['difficulty'] == 5) {
      echo "checked";
     
    } ?>>
  <label for="difficult" class="form-check-label"  >Très très très dur</label>
</div>




<div>

</div>


</div>







<!-- ----------------------------GARNITURES----------------------------------------- -->
<div class="garniture col-4"><div class="form-group">
      <label for="exampleTextarea" class="form-label mt-4">Votre Garniture</label>
      <textarea class="form-control" id="garniture" name="garniture" rows="3"><?php     if($editMode){
  echo $kebab['garniture'];
       } ?>
      </textarea>
    </div>
 </div>
<div class="form-group">
  

 

<?php 
if($editMode){ ?>
  <button type="submit"  name="id" value="<?=$kebab['id']  ?>" class="btn btn-primary "> CHANGE</button>  
<?php } else {?>

  <button type="submit" class="btn btn-primary "> CREATE</button> 

<?php  } ?>

</div>
 
</form>


</div>




    </body>
    
</htlm>
    