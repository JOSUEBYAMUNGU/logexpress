<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Espace Partenaire</title>
  <link rel="stylesheet" href="perso.css">
</head>

<body>
  <?php
  
  include('../template/nav.php')
  ?>

  <header class="header">
    <h1>Bienvenue, <span id="nomPartenaire">Josué</span></h1>
    <p>Entreprise : <strong id="entreprisePartenaire">LogExpress</strong></p>
  </header>
  <!--  -->

  <section class="partner-info">
    <div class="container">
      <h1 class="title">Bienvenue sur votre espace partenaire LogExpress</h1>
      <p>
        Nous sommes ravis de vous compter parmi nos partenaires. Cet espace vous est entièrement dédié pour gérer vos
        publications, suivre vos biens et bénéficier de nos outils professionnels conçus pour vous aider à mieux vendre,
        louer ou exposer vos services.
      </p>

      <h2>Comment ça fonctionne ?</h2>
      <p>
        Depuis cette page, vous pouvez ajouter vos biens en remplissant le formulaire ci-dessous. Chaque bien que vous
        publiez sera automatiquement affiché sur la page générale du site, visible par tous les visiteurs. Vous pouvez
        modifier ou supprimer vos publications à tout moment.
      </p>

      <h2>Sécurité et Confiance</h2>
      <p>
        Toutes les publications sont vérifiées pour garantir un contenu de qualité. Vos données sont protégées et ne
        seront jamais partagées sans votre consentement. Nous nous engageons à maintenir une relation de confiance
        durable avec chacun de nos partenaires.
      </p>
      <h2>Avantages d’être partenaire LogExpress</h2>
      <p>
        Visibilité accrue, espace personnalisé, support technique dédié, statistiques régulières : en tant que
        partenaire, vous bénéficiez d’une expérience complète et professionnelle.
      </p>

      <h2>Engagement et Responsabilité</h2>
      <p>
        Nous vous encourageons à publier des informations claires, à jour et fiables. Un contenu de qualité renforce la
        crédibilité de votre entreprise et contribue au bon fonctionnement de la communauté LogExpress.
      </p>

      <h2>Contact et Support</h2>
      <p>
        Besoin d’aide ? Écrivez-nous à <a href="mailto:support@logexpress.com">support@logexpress.com</a> ou utilisez le
        bouton "Support" dans votre tableau de bord.
      </p>
    </div>
  </section>




  <!--  -->
  <main class="main-content">
    <section class="publier">
      <h2>Publier un bien</h2>
      <form class="form-pub">
        <input type="text" placeholder="Nom du bien" required>
        <textarea placeholder="Description" required></textarea>
        <input type="text" placeholder="Prix ou info utile">
        <button type="submit">Publier</button>
      </form>
    </section>
  </main>

</body>

</html>