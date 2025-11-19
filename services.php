<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/output.css ">
  <link rel="stylesheet" href="service.css">
  <title>logexpress services</title>
</head>

<body>
  <?php
  include('template/nav.php')
  ?>

  <section class="services-title">
    <h2>Nos Services</h2>
    <p>Découvrez tout ce que LogExpress met à votre disposition pour répondre à vos besoins.</p>
  </section>








  <div class="blocgen">
    <div class="bloc8selling">
      <div class="paragraphe8chat ">
        <h2>Vente de biens immobiliers</h2>
        <p>
          Chez LogExpress, nous mettons en relation les propriétaires et les acheteurs potentiels. Grâce à notre réseau
          étendu et à notre expertise du marché, nous facilitons la vente rapide et sécurisée de maisons, parcelles,
          appartements et immeubles. Chaque bien est évalué avec précision pour garantir un prix juste et compétitif.
        </p>
        <button class="bouton8contact8agent">contacter agent</button>
      </div>

      <img src="./src/images/vente.jpg" alt="" class="selling">
    </div>




    <div class="bloc8location">
      <img src="./src/images/pic loc.jpg" alt="" class="location">
      <div class="paragraphe8location ">
        <h2>Location résidentielle et commerciale</h2>
        <p>Nous proposons un large choix de maisons, appartements, bureaux et magasins à louer dans plusieurs quartiers.
          Que vous soyez un particulier ou une entreprise, LogExpress vous accompagne dans la recherche du bien qui
          correspond exactement à vos besoins, à votre budget et à vos exigences.
        </p>
        <button class="bouton8contact8location">contacter agent</button>
      </div>
    </div>

  </div>


  <div class="div8gestion8gen">
    <h2 class="titre8gestion">Gestion immobilière, Promotion immobilière, </h2>
    <div class="div8gestion">
      <p class="service-box dark">
        Confiez-nous la gestion complète de vos biens. De la recherche de locataires fiables à la gestion des paiements
        et de l’entretien, LogExpress s’occupe de tout. Vous restez propriétaire, nous nous chargeons du reste, avec
        transparence et professionnalisme. <br>

      </p>
      <p class="service-box light">
        Vous êtes promoteur ou investisseur ? Nous vous aidons à mettre en avant vos projets auprès du bon public. Grâce
        à notre visibilité en ligne et nos partenaires, vos biens atteignent plus rapidement des acheteurs ou locataires
        qualifiés.</p>

    </div>

  </div>













  </div>

  <?php
  include('template/footer.php')
  ?>
</body>

</html>