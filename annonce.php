<?php 
$bloc_maison = [
  
     ["id"=> "1","titre"=> "villa A","location"=> "bukavu/ quartier xx /av yy ","statut"=> "à vendre", "image"=> "./src/images/img7.jpg","chambre"=> "3","salon"=> "2","prix"=> "200$" ],
     ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img1.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$" ],
     ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img2.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],

     ["id"=> "1","titre"=> "villa A","location"=> "bukavu","statut"=> "à vendre", "image"=> "./src/images/img3.jpg","chambre"=> "3","salon"=> "1","prix"=> "200$"],
     ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img5.jpg","chambre"=> "3","salon"=> "5","prix"=> "200$" ],
     ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img6.jpg","chambre"=> "3","salon"=> "3","prix"=> "200$"],
     
 
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


  <p class="maison_indispo">Aucune annonce disponible pour le moment. Revenez bientôt ou contactez-nous pour plus
    d'informations.
  </p>



  <div class="animate-on-scroll">


    <?php foreach($bloc_maison as $index => $maison) { ?>
    <div class="div_nouvelles_maisons">
      <img src="<?=$maison['image'] ?>" class=" images">
      <p class="statut_maison"><?=$maison['statut'] ?> </p>
      <div>
        <p class="titre_maison"><?=$maison['titre'] ?> </p>
        <strong class="location"><?=$maison['location'] ?></strong>

        <div class="bloc_details">
          <div class="chambre">
            <svg class="icone_bed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
              stroke="currentColor" class="size-6">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M12 8.25v-1.5m0 1.5c-1.355 0-2.697.056-4.024.166C6.845 8.51 6 9.473 6 10.608v2.513m6-4.871c1.355 0 2.697.056 4.024.166C17.155 8.51 18 9.473 18 10.608v2.513M15 8.25v-1.5m-6 1.5v-1.5m12 9.75-1.5.75a3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0 3.354 3.354 0 0 0-3 0 3.354 3.354 0 0 1-3 0L3 16.5m15-3.379a48.474 48.474 0 0 0-6-.371c-2.032 0-4.034.126-6 .371m12 0c.39.049.777.102 1.163.16 1.07.16 1.837 1.094 1.837 2.175v5.169c0 .621-.504 1.125-1.125 1.125H4.125A1.125 1.125 0 0 1 3 20.625v-5.17c0-1.08.768-2.014 1.837-2.174A47.78 47.78 0 0 1 6 13.12M12.265 3.11a.375.375 0 1 1-.53 0L12 2.845l.265.265Zm-3 0a.375.375 0 1 1-.53 0L9 2.845l.265.265Zm6 0a.375.375 0 1 1-.53 0L15 2.845l.265.265Z" />
            </svg>
            <p class="parag">
              chambres <?=$maison['chambre'] ?>
            </p>
          </div>

          <p class="parag">
            salons<?=$maison['salon'] ?>
          </p><br>
        </div>
        <p class="parag">
          toilettes, douches et autres cliquez sur details
        </p>

        <p class="prix">
          prix<?php echo $maison['prix'] ;

          if ($maison['statut']=='à vendre') {?>
          /total
          <?php }
            elseif ($maison['statut']=="à louer") {?>
          /mois
          <?php } ?>
        </p>

        <div class="boutons">
          <button class="bouton_details"><a href=''>voir details</a></button>
          <a href="" class="bouton_action">
            <?php
            if ($maison['statut']=='à vendre') {?>
            acheter
            <?php }
            elseif ($maison['statut']=="à louer") {?>
            louer
            <?php } ?>
          </a>
        </div>




      </div>
    </div>
    <?php }; ?>
  </div>

  </div>




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