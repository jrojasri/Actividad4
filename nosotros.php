<?php
include ('config/config.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finca las margaritas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" href="http://localhost/shedulePatients/estilos/inicio.css"> 
</head>
<body>
<?php include('menu.php') ?>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<div class="contenedor">
  <img class="img" src="images/vaca2.jpg"/>
  <div class="texto-encima"><h1 class="h1">Acerca de nosotros</h1>
</div>
  <div class="centrado">Finca las margaritas ofrece variedad de productos lacteos elaborados con la mejor calidad, también encontraras la mejor raza de animales para levante. </div>
</div>
<br><br>
<h1 class="h1">Nuestros productos en el mercado</h1>
<br><br>
<div class="contenedor1">
  <img class="img1" src="images/ternero.jpg"/>
  <div class="centrado1">Finca las margaritas desde hace más de 20 años se dedica al pastoreo de ganado bovino y elaboración de productos lacteos derivados de la leche. </div>
</div> <br><br>
<div class="contenedor2">
  <img class="img2" src="images/lechon.jpg"/>
  <div class="centrado2">Nuestros lechones siempre se han caracterizado por su calidad, su carne tiene gran demanda en el mercado.</div>
</div> <br><br>
<div class="contenedor3">
  <img class="img3" src="images/queso.jpg"/>
  <div class="centrado3">Nuestros quesos campesinos son elaborados artesanalmente, por lo que, su sabor y textura son inigualables. </div>
</div> <br><br>
</body>
<?php include('footer.php')?>   
</html>