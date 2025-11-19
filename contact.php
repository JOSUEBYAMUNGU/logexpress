<?php
session_start();

$erreurnom='';
$erreurtel='';
$erreursub='';
$erreurmessage='';

if ( isset($_POST['submit']) ) {

  $nom=$_POST['nom'];
  $tele=$_POST['tele'];
  $sub=$_POST['subject'];
  $msg=$_POST['message'];
  
  
  if ( empty($nom)) {
    $erreurnom='veillez remplir votre nom';
  }else{
    $_SESSION['nom']=$nom;
  }
    
   if ( empty($tele)) {
    $erreurtel='veillez entrer votre numéro de tél';
  }else{
    $_SESSION['tel']=$tele;
  }
    
    if (empty( $sub)) {
    $erreursub='veillez remplir ces champs';
  }else{
    $_SESSION['sub']=$sub;
  }
    
    if (empty($msg) ) {
    $erreurmessage='veillez ecrire votre message';
  }else{
    header("location:confirmation.php");
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <title>Document</title>
</head>

<body>
  <?php
  include('template/nav.php')
  ?>

  <section class="services-title">
    <h2>contactez-nous</h2>
    <p>notre équipe est disponible pour répondre à toutes vos préoccupations.</p>
  </section>

  <form action="" method="post" class="form">
    <input type="text" name="nom" placeholder="votre nom "><br>
    <p style="color: red; font-size: 13px; margin-left: 15px;"><?=$erreurnom?>
    </p>


    <input type="mail" name="mail" placeholder="entrer votre mail"><br>


    <input type="tel" name="tele" placeholder="votre numero de téléphone"><br>
    <p style="color: red; font-size: 13px; margin-left: 15px;"><?=$erreurtel?></p>

    <input type="text" name="subject" placeholder="sujet de votre message"><br>
    <p style="color: red; font-size: 13px; margin-left: 15px;"><?=$erreursub?></p>

    <textarea name="message" id="">votre message</textarea><br>
    <p style="color: red; font-size: 13px; margin-left: 15px;"><?=$erreurmessage?></p>
    <button type="submit" name="submit">envoyer</button>
  </form>

  <section class="infos">
    <h2 class="infos-title">nos informations</h2>
    <p><strong>Email :</strong> contact@winneragency.com</p>
    <p><strong>phone :</strong> +257 79 000 000</p>
    <p><strong>Adresse :</strong> Bujumbura, Burundi</p>
    icones
  </section>

  <?php
  include('template/footer.php')
  ?>
</body>

</html>