<?php
 include('../config/config.php');
 include('Patient.php');

$p = new Patient(); 
$allpatient = $p->getALL(); 

if(isset($_GET['id']) && !empty($_GET['id'])){
    $remove = $p->remove($_GET['id']);
    if ($reomove) {
        header('Location: ' . ROOT . 'patients/index.php');
    } else { 
        $msj = "<div class='alert alert-danger' rol='alert' > Error al eliminar agenda. </div> "; 
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title> Agenda de Clientes </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
<?php include('menuadmin.php') ?>
    
    <div class="container">
        <h2 class="text-center mb-5 h1"> Agenda de Clientes</h2>

        <div class="row">
            <?php
            while( $usuarios= mysqli_fetch_object($allpatient) ) 
            {
               
                echo "<div class='col-6'>";
                echo "<div class='border border-info p-2'>";
                echo "<h5>Nombre: $usuarios->nombre  </h5>";
                echo "<p><b>Correo:</b> $usuarios->email 
                <br>
                <b> Ciudad: </b>  $usuarios->ciudad
                </p>";
            

                echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/patients/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/patients/index.php?id=$usuarios->id' >Eliminar</a> </div>";

                echo "</div>";
                echo "</div>";
            }

       
            ?>
        </div>


    </div>
</body>

</html>
        