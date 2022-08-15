<?php
include ('config/config.php');

?>

<!DOCTYPE html>
<html>
    <head>
      <title>Finca las margaritas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
        <link rel="stylesheet" href="http://localhost/shedulePatients/estilos/inicio.css">  
       
</head>
<body>   
<?php include('menu.php') ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
     <div class="text-encima"><h1 class="h1">¡Bienvenidos a nuestra finca!</h1></div> 
      <img src="images/vaca1.png" class="d-block w-100" alt="...">
      <div class="texto-encima1"><h1 class="t1">A nuestras vacas se les nota el cuido.</h1>
</div>
    </div>
    <div class="carousel-item">
      <img src="images/porcicultura.jpg" class="d-block w-100" alt="...">
      <div class="texto-encima1"><h1 class="t1">A nuestros lechones se les nota el cuido.</h1>
</div>
    </div>
    <div class="carousel-item">
      <img src="images/novillos.jpg" class="d-block w-100" alt="...">
      <div class="texto-encima1"><h1 class="t1">A nuestros novillos se les nota el cuido.</h1>
</div>
    </div>
  </div>
</div>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<?php include('footer.php')?>
</body>
</head> 