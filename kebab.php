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

    <!-- AFFICHAGE LISTE KEBABS -->

    <div class="container mt-5">
      <div class="row d-flex flex-row">
        


        <h2 class="text-center mb-5"> Liste des kebabs surprise</h2>
         


        <!-- AFFICHAGE UN SEUL KEBAB -->

        <?php 
        $kebab;
        
        ?>
            <div class="col-12 m-auto ">
          <div class="card text-white bg-dark mb-3">
            <div class="card-header text-center">Kebab de: <?=$kebab['garniture'] ?></div>
            <div class="card-body">
              <ul>
                <li style="text-align:center">
                  Garniture:
                  <?=$kebab['garniture'] ?>
                </li>
                <li class="text-info" style="text-align:center" >Sauce: <?=$sauces[$kebab['sauce']] ?> </li>
                <li class="text-success" style="text-align:center">Viande : <?=$viandes[$kebab['viande']] ?></li>
               
                <li class="text-danger" style="text-align:center">Difficulty: <div style="text-align:center" class="w-auto">
                <?php for($i=0; $i<5; $i++) {  ?>


                   
                <div class="dot<?php if($kebab['difficulty']>$i){echo " full";} ?>"></div>
                <?php } ?></li>
              </ul>

              <form method="POST" class="d-flex justify-content-center align-items-center" action="deleteKebab.php"> 

              <button type="submit" class="btn btn-primary m-2" name="delete" value="<?=$kebab['id']?>">Delete </button>
              <a href="createKebab.php?id=<?=$kebab['id'] ?>&edit" class="btn btn-outline-secondary m-2"> Edit</a>
              </form>
            </div>
          </div>
          </div>
      
          
          
        
      </div>
    </div>


  </body>
  <footer class="bg-dark text-muted"> This is a footer I got the flemme de recuperer le c donc je fait un @</footer>
</html>
