<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>



  <div class="annonce">
    <div>
      <img src="<?= $maison["image"]?>" class="image">
    </div>

    <div>
      <div class="annonce-details">
        <h2><?= $maison["titre"]?></h2>
        <p class="statut_maison">
          <?= $maison['statut'];
            ?>
        </p>
        <div class="description">
          Spacieuse maison de <?= $maison["chambre"]?> chambres, 2 salles de bain, <?= $maison["salon"]?> salons
          lumineux et cuisine
          équipée.
          Quartier calme,
          proche
          des écoles et commerces. Située à <strong><?= $maison["location"]?></strong> dans la commune de
          <strong><?= $maison["commune"]?></strong> .
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
          <button class="details-btn"><a href="./voirdetail/voir_detail.php?id=<?php $maison['id']?>">Voir
              détails</a></button>


          <button class="acheter-btn"> <a href="">
              <?php
            if ($maison['statut']=='à vendre') {?>
              acheter
              <?php }
            elseif ($maison['statut']=="à louer") {?>
              louer
              <?php }?>
            </a></button>
        </div>
      </div>

    </div>
  </div>

</body>

</html>