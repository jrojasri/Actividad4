<?php
include ('config/config.php');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Calendario de Citas</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
</head>
<body>
<nav class="navbar navbar-expand navbar-dark bg-dark mb-5">
    <ul class="navbar-nav">
        <li class="nav.item">
            <a class="nav-link" href="<?= ROOT?>/Patients/index.php"> Vizualizar agenda </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?= ROOT?>/Patients/add.php"> Agendar nueva cita </a>
        </li>
    </ul> 
</nav>  
    <div class="container">
<h1 class="text-center mt-5">Calendario de Citas</h1>
    </div>
 
</body>
</head> 