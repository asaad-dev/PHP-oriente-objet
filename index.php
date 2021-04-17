<?php 
   require 'class/Article.php';
   // require 'class/Page.php';

   // $article = new Article('déclaration d\'une class', 'une manière de déclarer et de structurer correctement une classe', '13-04-2021');
   // $page = new Page('PHP oriente-objet', 'base de donnés', '11-04-2021');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   <title>php orienté objet</title>
</head>
<body>
  <div class="container">
     <div class="row">
     <div class="col">
         <?php 
             $article1 = new Article('Ma vie mon oeuvre', 'Lorem', '2021-04-13');
             $article1->afficher();
         ?>
     </div>
     <div class="col">
     <?php 
         $article2 = new Article('découverte importante','lorem lorem', '2021-04-12');
         $article2->afficher();
      ?>
     </div>
     </div>
  </div>
   
</body>
</html>