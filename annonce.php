<?php 
$bloc_maison = [
  
     ["id"=> 1,"titre"=> "villa A","location"=> "bukavu/quartier xx /av yy ","commune" => "ibanda","statut"=> "à vendre", "image"=> "./src/images/img7.jpg","chambre"=> "3","salon"=> "2","prix"=> "200$" ],
     ["id"=> 2,"titre"=> "villa B","location"=> "bk","commune" => "bagira","statut"=> "à louer","image"=> "./src/images/img1.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$" ],
     ["id"=> 3,"titre"=> "villa C","location"=> "hdfdf","commune" => "kadutu","statut"=> "à louer","image"=> "./src/images/img2.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],

     ["id"=> 4,"titre"=> "villa A","location"=> "bukavu","commune" => "ibanda","statut"=> "à vendre", "image"=> "./src/images/img3.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],
     ["id"=> 5,"titre"=> "villa B","location"=> "bk","commune" => "kadutu","statut"=> "à louer","image"=> "./src/images/img5.jpg","chambre"=> "3","salon"=> "5","prix"=> "200$" ],
     ["id"=> 6,"titre"=> "villa C","location"=> "dhdhdj","commune" => "bagira","statut"=> "à louer","image"=> "./src/images/img6.jpg","chambre"=> "3","salon"=> "3","prix"=> "200$"],
      
     
 
  ];



 

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="annonce.css">
  <title>Document</title>
</head>

<body>
  <?php
  include('template/nav.php')
  ?>
  <!--flou  -->
  <div class="global">

    <h1 class="titre">Découvrez nos annonces immobilières </h1>


    <p class="paragraphe_intro"> Bienvenue sur la page des annonces de LogExpress. Retrouvez ici toutes les maisons,
      appartements et
      terrains
      disponibles à la location ou à la vente. Nos offres sont mises à jour régulièrement pour vous garantir les
      meilleures opportunités du marché.
    </p>

    <?php
  if (empty($bloc_maison)) {?>
    <p class="maison_indispo">Aucune annonce disponible pour le moment. Revenez bientôt ou contactez-nous pour plus
      d'informations.
    </p>
    <?php } else{ ?>



    <!--commune  -->
    <h1 style="text-align: center; background-color: bisque;">ibanda</h1>
    <section class="section_annonce">

      <?php
    foreach ($bloc_maison as $key => $maison) {
     if ($maison['commune'] == 'ibanda') {
   
      include('./template/annonce_file.php'); } }
?>
    </section>



    <!-- kadutu -->
    <h1 style="text-align: center; background-color: bisque;">kadutu</h1>
    <section class="section_annonce">
      <?php
      foreach ($bloc_maison as $key => $maison) {
      if ($maison['commune'] == 'kadutu') {

      include('./template/annonce_file.php'); } }
      ?>
    </section>




    <!-- bagira -->

    <h1 style="text-align: center; background-color: bisque;">bagira</h1>
    <section class="section_annonce">
      <?php
      foreach ($bloc_maison as $key => $maison) {
      if ($maison['commune'] == 'bagira') {

      include('./template/annonce_file.php'); } }
      ?>








    </section>

    <!-- closing tag condition page vide -->
    <?php }?>










    <p class="proprio">Vous êtes propriétaire ? Publiez gratuitement votre bien en cliquant ici. Faites confiance à
      LogExpress
      pour
      trouver rapidement un locataire ou un acheteur !
    </p>




    <?php
  include('template/footer.php')
  ?>
  </div>

  <!--members  -->
  <?php
  include('template/logmembers.php')
  ?>
  <script src="script.js"></script>

</body>

</html>