<?php
include('../config/config.php');
include('patient.php');
$p = new Patient();
$data = mysqli_fetch_object($p->getOne($_GET['id']));  
$date = new DateTime($data->fecha);

if (isset($_POST) && !empty($_POST)){

    $update = $p->update($_POST);
    if ($update){
        $error = '<div class="alert alert-success" role="alert">Agenda modificada correctamente</div>';
    }else{
        $error = '<div class="alert alert-danger" role="alert" > Error al modificar la agenda</div>';
    }
}

?>
<!DOCTYPE html> 
<html>

<head>
    <meta charset="UTF-8" />
    <title> Modificar Agenda </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/shedulePatients/estilos/add.css">
</head>

<body>
<?php include('menuadmin.php') ?>
    <div class="container">
        <?php 
        if  (isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5 h2"> Modificar Agenda </h2>
        <form method="POST" enctype="multipar/form-data">
            <div class="row mb-2">
                <div class="col">
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" require class="form-control" value="<?= $data->nombre ?>" />
                    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
                </div>
                <div class="col">
                    <input type="text" name="edad" id="edad" placeholder="Edad" require class="form-control" value="<?= $data->edad ?>" />
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                    <input type="email" name="email" id="email" placeholder="Email" require class="form-control" value="<?= $data->email ?>" />
                 </div>
                 <div class="col"> 
                 <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" require class="form-control" value="<?= $data->ciudad ?>" />        
                
                </div>
              </div>
    
         <div class="row mb-2">
        <div class="col-6">
        <input type="datetime-local" name="fecha" id="fecha" value="<?= $date->format('Y-m-d\TH:i') ?>" require class="form-control" />
        </div>
        </div>
        <button class="btn btn-success"> Modificar </button>
    </div>   
   

        </form>
     

    </div>
</body>


</html>