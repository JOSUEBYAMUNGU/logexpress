<?php 
$bloc_maison = [
  
     ["id"=> "1","titre"=> "villa A","location"=> "bukavu/ quartier xx /av yy ","statut"=> "à vendre", "image"=> "./src/images/img7.jpg","chambre"=> "3","salon"=> "2","prix"=> "200$" ],
    //  ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img1.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$" ],
    //  ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img2.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],

    //  ["id"=> "1","titre"=> "villa A","location"=> "bukavu","statut"=> "à vendre", "image"=> "./src/images/img3.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],
    //  ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img5.jpg","chambre"=> "3","salon"=> "5","prix"=> "200$" ],
    //  ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img6.jpg","chambre"=> "3","salon"=> "3","prix"=> "200$"],
     
 
  ];
//$postes ='admin';
$user=['name'=>'jack',
      'matricule'=>'5233',
      'poste'=> 'admi',
]


 

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


  <section class="section_annonce">
    <?php
  foreach ($bloc_maison as $key => $maison) {?>

    <div class="annonce">
      <div>
        <img src="<?= $maison["image"]?>" class="image">
      </div>

      <div>
        <div class="annonce-details">
          <h2>Villa A</h2>
          <p class="statut_maison">
            <?= $maison['statut']?>
          </p>
          <div class="description">
            Spacieuse maison de 3 chambres, 2 salles de bain, 2 salons lumineux et cuisine équipée. Quartier calme,
            proche
            des écoles et commerces. Située à <strong>Bukavu, quartier xx / av yy</strong>.
          </div>
          <p class="prix">
            <strong>
              prix<?php echo $maison['prix'] ;

          if ($maison['statut']=='à vendre') {?>
              /total
              <?php }
            elseif ($maison['statut']=="à louer") {?>
              /mois
              <?php } ?>
            </strong>
          </p>

          <div class="buttons">
            <button class="details-btn"><a href="">Voir détails</a></button>
            <button class="acheter-btn"> <a href="">
                <?php
            if ($maison['statut']=='à vendre') {?>
                acheter
                <?php }
            elseif ($maison['statut']=="à louer") {?>
                louer
                <?php } ?>
              </a></button>
          </div>
        </div>

      </div>
    </div>


    <?php
  } 
  ?>
  </section>
  <?php }?>










  <p>Vous êtes propriétaire ? Publiez gratuitement votre bien en cliquant ici. Faites confiance à LogExpress pour
    trouver rapidement un locataire ou un acheteur !
  </p>




  <?php
  include('template/footer.php')
  ?>
  <script src="script.js">
  </script>

</body>

</html>