<?php
require_once("listagens/galeria_de_imagens_listas.php");
require_once("class/Galeria_Galeria.class.php");


$galeria = new Galeria_Galeria("galeria", $image_list, $image_list_hidden, "jsimg hidden", 'css/02_galeria_de_imagens.css', 'js/02-galeria-imagens.js');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Galeria de Imagens</title>
      <?php echo $galeria->head(); ?>
   </head>
   <body>
         <?php echo $galeria->make_galeria(); ?>
   </body>
</html>