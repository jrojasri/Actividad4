<?php
 include('../config/config.php');
 include('patient.php');

 if (isset($_POST) && !empty($_POST)){
    $patients = new Patient();

   
    $save = $patients->save($_POST);
    if ($save){
        $error = '<div class="alert alert-success" role="alert">Agenda creada correctamente</div>';
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
        
<link rel="stylesheet" href="http://localhost/shedulePatients/estilos/add.css">
</head>
<body class="body">
    <?php include('../menu.php') ?>
    <div class="container">
        <?php
        if(isset($error)){
            echo $error;
        }
        ?>
        <h2 class="h2"class="text-center mb-5"> Agendate con nosotros</h2> <br><br><br>
        <form method="POST" enctype="multipart/form-data">
            <div class="row mb-2">
                <div class="col">
<input type="text" name="nombre" id="nombre" required placeholder="Nombre y Apellido" require class="form-control" />
                </div>
             <div class="col">
<input type="text" name="edad" id="edad" required placeholder="Edad" require class="form-control" />  
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
<input type="text" name="email" id="email" required placeholder="Email" require class="form-control" />
                </div>
             <div class="col">
<input type="text" name="ciudad" id="ciudad" required placeholder="Ciudad de residencia" require class="form-control" />  
                </div>
            </div>
        
    <div class="row mb-2">
        <div class="col-6">
        <input type="datetime-local" name="fecha" id="fecha" require class="form-control" />
        </div>
        </div>

        <button class="btn btn-success"> Registrar </button>
    </form>


    </div>




    </div>
</body>
</html>
