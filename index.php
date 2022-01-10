 <?php

require_once 'logique.php';


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
    <script src="https://kit.fontawesome.com/89fe9bcfac.js" crossorigin="anonymous"></script>
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
    <header
      class="d-flex justify-content-center flex-column align-items-center"
    >
      <h1>Welcome on Kebab-S Marie</h1>
      <a href="createKebab.php" class="btn btn-outline-secondary">Creer un kebab</a>
      <p class="text-muted">bande d'enculer.</p>
    </header>



    <div class="dot"> </div>
    <!-- AFFICHAGE LISTE KEBABS -->

    <div class="container mt-5">
      <div class="row d-flex flex-row">
        
      <div class="dot"> </div>

        <h2 class="text-center mb-5"> Liste des kebabs surprise</h2>
       
          <?php foreach($kebabs as $kebab) { ?>
            <div class="col-4 m-auto ">
          <div class="card text-white bg-dark mb-3">
            <div class="card-header text-center"><h3> Kebab: <?=$kebab['garniture'] ?> </h3></div>
            <div class="card-body">
              <ul>
              
                <li class="text-info">Sauce: <?=$sauces[$kebab['sauce']] ?> </li>
                <li class="text-success">Viande: <?=$viandes[$kebab['viande']] ?></li>
                <div>  </div>
                <li class="text-danger">Difficulty: <div style="text-align:center" class="w-auto">
                <?php for($i=0; $i<5; $i++) {  ?>


                   
                <div class="dot<?php if($kebab['difficulty']>$i){echo " full";} ?>"></div>
                <?php } ?>
               
              </ul>


              <div class="d-flex">   <form method="POST" class="d-flex justify-content-center align-items-center"> 

              
              
              </form>
              <a href="kebab.php?id=<?=$kebab['id'] ?>" class="btn btn-outline-success m-2"> SEE</a> </div>

              <form action="deleteKebab.php" method="post"> 
              <button type="submit" class="btn btn-success m-2" name="delete" value="<?=$kebab['id']?>">Delete </button>
              </form>
           
            </div>
          </div>
          </div>
          <?php } ?>
      
          
          
        
      </div>
    </div>


  </body>
  <footer class="bg-dark text-muted"> This is a footer I got the flemme de recuperer le c donc je fait un @</footer>
</html>
