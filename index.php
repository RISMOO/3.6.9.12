
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
   
    <link rel="stylesheet" href="age.css">
    <title>ECRAN/AGES_ENFANTS</title>
</head>
   <body>
     <header>
      <div class="container">
      <div class="jumbotron">
      
      <h3 class="text-light">REGLES DE VIE : ECRANS ET VOS ENFANTS </h3>
   
          <h4 class="text-primary font-weight-light">Entrez un age entre : 2 et 12 ans  </h4><br>
       
    <form method="post" action="index.php" id="form">
        <div class="form-group text-center">   
          <input type="number" class="form-control text-center" name="age" placeholder="Veuillez entrer l'age de l'enfant" required>
          <button type="submit" class="btn btn-success">Valider</button><br>
      </form><br>
      <h4 class="text-muted font-weight-light">Plus d'infos sur <a href="https://www.mpedia.fr/art-usage-des-ecrans-quel-age/">mpediafr</a></h4>
  
 </div>
 <a href="#!"><i class="fas fa-gift fa-3x text-success" data-toggle="modal" data-target="#modalcenter"></i></a>

 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Le saviez-vous ?
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title font-weight-bold" id="exampleModalLabel">La régle des 3-6-9-12</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/_UGndF3Z1lI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        ...
      </div>
      <div class="modal-footer">
    <a href="https://www.3-6-9-12.org/videos-de-serge-tisseron/" ><button type="button" class="btn btn-primary">Voir la suite</button></a>&nbsp;&nbsp;
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      
      </div>
    </div>
  </div>
</div>

 
     </header>


    

 
    
 

 <?php
 if(isset($_POST['age']) ? $age=htmlspecialchars($_POST['age']) : '' ){

 
    
   
 ?>
   <div class="alert alert-success" role="alert">

    <?php
 

  if((isset($age)) ? (isset($age)) : '')  {


     if ($age ==1 ) {
     echo "<strong class='text-dark'>" .  $age . "an". "</strong>" . ", pas d'écran avant 3 ans";
     }

       elseif ($age == 2 )   {

        echo "<strong class='text-dark'>" .  $age . " ans" ." </strong>" .", pas de télévison ou tout autre écran avant 3 ans";

      
   
        } elseif ($age >= 3 && $age <=6 ) {
          echo "<strong class='text-dark'>" .  $age . " ans" . "</strong>" . ", avec modération, privilegiez les en familles, pas de console avant 6 ans ";

    
            
            
        } elseif ($age > 6 && $age <=9)  {
          echo "<strong class='text-dark'>" .  $age . " ans" . "</strong>" . ", Pas plus d'1 heure par jour, privilegiez les en familles, internet accompagné a partir de 9 ans ";
          
           
        } elseif ($age >9 && $age <=12 ){
          echo "<strong class='text-dark'>" .  $age . " ans". "</strong>" .  ", Internet accompagné, privilegiez les en familles, internet seul a partir de 12 ans ";
           
      
           
        } else { 

          
            echo "<strong class='text-dark'>" .   $age ." ans". "</strong>" .", Cet age n'est pas dans notre base de données ";
        
        }
      
  }

 }
?>



  </div>


  
<?php


include "footer.php";
?>

       


</body>

</html>

 
