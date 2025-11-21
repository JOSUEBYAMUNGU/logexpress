<?php 
$bloc_maison = [
  
     ["id"=> "1","titre"=> "villa A","location"=> "bukavu/ quartier xx /av yy ","statut"=> "à vendre", "image"=> "./src/images/img7.jpg","chambre"=> "3","salon"=> "2" ],
     ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img1.jpg","chambre"=> "3","salon"=> "1" ],
     ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img2.jpg","chambre"=> "3","salon"=> "1"],

     ["id"=> "1","titre"=> "villa A","location"=> "bukavu","statut"=> "à vendre", "image"=> "./src/images/img3.jpg","chambre"=> "3","salon"=> "1","poste"=> "client"],
     ["id"=> "1","titre"=> "villa B","location"=> "bk","statut"=> "à louer","image"=> "./src/images/img5.jpg","chambre"=> "3","salon"=> "5" ],
     ["id"=> "1","titre"=> "villa C","location"=> "","statut"=> "à louer","image"=> "./src/images/img6.jpg","chambre"=> "3","salon"=> "3"],
     
 
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
  <title>logexpress acceuil</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  include('./template/nav.php')
  ?>
  <!-- global flou div -->
  <div class="global">


    <main class="hero">
      <div class="blur-box">
        <h1>Bienvenue chez LogExpresse</h1>
        <p>
          Location & Vente de Maisons
          Chez LogExpresse, nous transformons vos projets immobiliers en réalité. Que vous souhaitiez louer, acheter
          ou
          vendre une maison, notre équipe est là pour vous accompagner avec sérieux, rapidité et transparence.
        </p>
      </div>

    </main>
    <button class="serviceacceuil"><a href="services.php">nos services</a></button>

    <!--apparte exemple-->
    <div>
      <div class="blocgen1">
        <div class="bloc1">
          <img src="./src/images/agentimmo.jpg" alt="" class="imgagentimmo">
          <p>Saviez-vous que… ?

            Saviez-vous que vous pouvez trouver une maison à louer ou à vendre sans même sortir de chez vous ?
            Chez vous, depuis votre téléphone ou votre ordinateur, vous pouvez dès maintenant accéder à des biens
            immobiliers fiables, abordables et prêts à visiter.
          </p>

        </div>

        <div class="bloc2">
          <img src="./src/images/main aget.jpg " alt="" class="imgmainagent">
          <p class="para1">LogExpresse est une plateforme spécialisée dans la location et la vente de maisons.
            Notre objectif est simple : rendre l’immobilier rapide, simple et accessible à tous, sans stress, sans
            perte
            de temps.

            Avec LogExpresse, vous bénéficiez d’un accompagnement personnalisé par des agents immobiliers
            expérimentés,
            disponibles et à l’écoute de vos besoins.

          </p>
        </div>

      </div>


      <div class="paragraphemot"> Grâce à notre système 100% connecté, vous pouvez :
        <div class="paragraphemot8contain">
          <a href="annonce.php">✔ Chercher une maison</a>
          <a href="contact.php">✔ Planifier une visite</a>
          <a href="contact.php">✔ Parler à un agent</a>
          <a href="">✔ Envoyer vos documents</a>
          <a href="">✔ Et même conclure votre contrat… depuis chez vous !</a>
        </div>

        Que vous cherchiez à louer une maison confortable pour votre famille ou à acheter la maison de vos rêves,
        LogExpresse est là pour vous aider à chaque étape du processus.
        <br>
      </div>
    </div>
    <!--bloc pour les nouvelles maisons-->
    <p class="paragrapheblocnvlmaisons">Découvrez les maisons récemment ajoutée <br> chez LogExpresse</p>

    <div class="animate-on-scroll">


      <?php foreach($bloc_maison as $index => $maison) { ?>
      <div class="div_nouvelles_maisons">
        <img src="<?=$maison['image'] ?>" class=" images">
        <p class="statut_maison"><?=$maison['statut'] ?> </p>
        <div>
          <p class="titre_maison"><?=$maison['titre'] ?> </p>
          <strong><?=$maison['location'] ?></strong>

          <div class="bloc_details">
            <div class="chambre">
              <svg class="icone_bed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="size-6">
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


          <button class="bouton_details"><a href='
          
         '>voir details</a></button>



        </div>
      </div>
      <?php }; ?>
    </div>


    <?php
       include('./template/footer.php')
     ?>
  </div>



  </div>
  <?php
  include('template/logmembers.php')
  ?>
  <script src="script.js"></script>



</body>

</html>

<!-- nom=<img src="<?=$maison['image'] ?>" style="width:50vw; margin: 15px; height: 50vh;object-fit: cover;
  margin-left: 22vw;
  -->

<!-- - Notre équipe : « »
  - Nos valeurs : « Intégrité, professionnalisme et engagement sont au cœur de toutes nos actions. »
  - Témoignages : « Écoutez ce que nos clients satisfaits disent de notre expertise et de notre accompagnement. » -->