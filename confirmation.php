<?php
session_start();
if (!isset($_SESSION["nom"]) && !isset($_SESSION["sub"])  ) {
  header("location:contact.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="confirmation.css">
  <title>Document</title>
  <style>
  body {
    background: #000;
  }

  .bloc {

    background: #6e6e6eff;
    width: 40vw;
    height: 40vh;
    margin-left: 25vw;
    margin-top: 40vh;
    border-radius: 25px;
  }

  .bloc h3 {
    text-align: center;
    color: bisque;
    font-family: 'Times New Roman', Times, serif;
    padding: 30px;
  }

  .bloc p {
    text-align: center;
    color: white;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    padding: 20px;
  }

  .bloc small {
    color: antiquewhite;
    margin-left: 30vw;
  }
  </style>
</head>

<body>
  <div class="bloc">
    <h3>bonjour <?=$_SESSION['nom']?></h3>
    <p>merci d'avoir contacté logexpress en ce qui concerne
      <?=$_SESSION['sub']?>nous vous répondrons dans une courte durée </p><small>merci ! ! !</small>
  </div>
</body>

</html>