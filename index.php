<?php
$list = [
  [
    'name' => "Introduzione",
    'link' => "introduzione.php" 
  ],
  [
    'name' => "Norme sulla privacy",
    'link' => "Norme sulla privacy.php" 
  ],
  [
    'name' => "Termini di servizio",
    'link' => "Termini di servizio.php" 
  ],
  [
    'name' => "Tecnologia",
    'link' => "Tecnologia.php" 
  ],
  [
    'name' => "Domande Frequenti",
    'link' => "index-2.php" 
  ],
 
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>
<body>
<header>
    <nav class="container-navbar">
      <div class="container-header">
        <img class="logo-google" src="https://doodles.google.ca/d4g/images/splashes/featured.png" alt="Logo Google">
        <h4>Privacy & Termini</h4>
      </div>

      <ul class="d-flex">
        <?php
        foreach($list as $key => $item){
          $name = $item['name'];
          $link = $item['link'];
          echo" <li><a href='$link'> $name </a></li>";
        }

        ?>
      </ul>
    </nav>
  </header>
</body>
</html>