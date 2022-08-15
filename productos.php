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
<link rel="stylesheet" href="http://localhost/shedulePatients/estilos/productos.css">
</head>
<body>
<?php include('menu.php') ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script><br><br>
<h1 class="h1">Productos lácteos</h1><br><br>
<div class="row row-cols-1 row-cols-md-3 g-4 ">
  <div class="col">
    <div class="card h-100">
      <img src="images/cuajada.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Cuajada</h5>
        <p class="card-text">Nuestra cuajada es elaborada naturalmente con leche de vaca, este producto se vende por libra.</p>
        <a href="#" class="btn btn-success">$5.000</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/quesoprensado.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Queso Prensado</h5>
        <p class="card-text">Nuestro queso prensado es elaborado artesanalmente, por lo que, su sabor y textura son inigualables. Este producto se vende por libra.</p>
        <a href="#" class="btn btn-success">$7.000</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/leche.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Leche de Vaca</h5>
        <p class="card-text">Nuestra leche de vaca es totalmente natural y fresca, este producto se vende por litro.</p>
        <a href="#" class="btn btn-success">$1.500</a>
      </div>
    </div>
  </div>
</div><br><br>
<h1 class="h1">Nuestros animales de ceba</h1><br><br>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="images/lechones.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Lechones</h5>
        <p class="card-text">Nuestros lechones son criados y alimentados en las mejores condiciones para lograr su mejor desarrollo.</p>
        <a href="#" class="btn btn-success">$100.000</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/terneros.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Terneros</h5>
        <p class="card-text">Nuestros teneros de un año de edad especialmente para empezar el proceso de ceba.</p>
        <a href="#" class="btn btn-success">$1.000.000</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="images/novillos.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Novillos de ceba</h5>
        <p class="card-text">Nuestros novillos de levante son alimentados con concentrado y pastos de la mejor calidad para su óptimo desarrollo.</p>
        <a href="#" class="btn btn-success">$3.000.000</a>
      </div>
    </div>
  </div>
</div><br><br><br>
<?php include('footer.php')?>  
</body>
</html>