<?php 
$bloc_maison = [
  
     1=>["titre"=> "villa A","location"=> "bukavu/ quartier xx /av yy ","statut"=> "à vendre", "image"=> "./src/images/img7.jpg","chambre"=> "3","salon"=> "2","prix"=> "200$" ],
     2=>["titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img1.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$" ],
     3=>[ "titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img2.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],

     4=>["titre"=> "villa A","location"=> "bukavu","statut"=> "à vendre", "image"=> "./src/images/img3.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],
     5=>["titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img5.jpg","chambre"=> "3","salon"=> "5","prix"=> "200$" ],
     6=>["titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img6.jpg","chambre"=> "3","salon"=> "3","prix"=> "200$"],
     ];


$id=$_GET['id'];






     

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>
  <?php
  if (isset($bloc_maison['id'])) {
  $maison=$bloc_maison[$id];?>
  <p>
    <?= $maison["titre"]
    ?>
  </p>
  <?php }?>

</body>

</html>