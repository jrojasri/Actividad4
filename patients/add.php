<?php
 include('../config/config.php');
 include('patient.php');

 if (isset($_POST) && !empty($_POST)){
    $patients = new Patient();

   
    $save = $patients->save($_POST);
    if ($save){
        $error = '<div class="alert alert-success" role="alert">Paciente creado correctamente</div>';
    } else{
        $error = '<div class="alert alert-danger" role="alert" > Error al crear un paciente </div>';
    }
 }

?>

<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8" />
        <title> Agendar nueva cita </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php include('../menu.php') ?>
    <div class="container">
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        <h2 class="text-center mb-5"> Agendar una Cita </h2>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
<input type="text" name="nombre" id="nombre" placeholder="Nombre y Apellido" require class="form-control" />
                </div>
             <div class="col">
<input type="text" name="edad" id="edad" placeholder="Edad" require class="form-control" />  
                </div>
            </div>

        <div class="row mb-2">
        <div class="col">
    <input type="email" name="email" id="email" placeholder="Email paciente" require class="form-control" />
    </div>
    <div class="col">
    <input type="text" name="sessionDate" id="sessionDate" placeholder="Género con el que se identifica" require class="form-control" />
    </div>
    </div> 
    <div class="row mb-2">
        <div class="col">
<textarea name="ciudad" id="ciudad" placeholder="Departamento y ciudad de residencia" requiere class= "form-control"></textarea>
<b> Separar la ciudad y el departamento con una coma </b>
        </div>
    </div>   
    <div class="row mb-2">
        <div class="col">
        <input type="datetime-local" name="fecha" id="fecha" require class="form-control" />
        </div>
        <div class="col">
     <input type="text" name="duration" id="duration" place holder="Duracion de la seción" require class="form-control" />
        </div>
    </div>   

        <button class="btn btn-success"> Registrar </button>
    </form>


    </div>




    </div>
</body>
</html>
