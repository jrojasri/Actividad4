<?php
  include('../config/config.php');
  include('../config/Database.php');

  class Patient{
    public $conn; 

    function __construct()
    {
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conn = $db->connectToDatabase();
    }

    function save($params)
    {
        $nombre = $params['nombre'];
        $edad = $params['edad'];
        $fecha = $params['fecha'];
        $email = $params['email'];
        $sessionDate = $params['sessionDate'];
        $ciudad = $params['ciudad'];
        

        $insert = " INSERT INTO clientes VALUES (NULL, '$nombre', '$edad', '$fecha', '$email', '$ciudad') ";
        return mysqli_query($this->conn, $insert); 
      }

    function getALL()
    {
        $sql = " SELECT = FROM clientes ORDER BY fecha ASC ";
        
    }

    function remove($id)
    {
      $remove = "DELETE FROM clientes WHERE id = $id"; 
      return mysqli_query ($this->conn, $remove);
    }
  }

  
 

?>