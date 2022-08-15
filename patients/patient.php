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
        $ciudad = $params['ciudad'];
        

        $insert = " INSERT INTO clientes VALUES (NULL, '$nombre', '$edad', '$fecha', '$email', '$ciudad') ";
        return mysqli_query($this->conn, $insert); 
      }

    function getALL()
    {
        $sql = "SELECT * FROM clientes ";
        return mysqli_query($this->conn, $sql); 
    }


        function getOne($id){
        $sql = "SELECT * FROM clientes WHERE id = $id";
        return mysqli_query($this->conn, $sql);
      }
    function update($params){
      $nombre = $params['nombre'];
      $edad = $params['edad'];
      $fecha = $params['fecha'];
      $email = $params['email'];
      $ciudad = $params['ciudad'];
        $id = $params['id'];
  
        $update = " UPDATE clientes SET nombre='$nombre', edad='$edad', fecha='$fecha', email='$email', ciudad='$ciudad' WHERE id = $id";
        return mysqli_query($this->conn, $update);
      }
    function remove($id)
    {
      $remove = "DELETE FROM clientes WHERE id = $id"; 
      return mysqli_query ($this->conn, $remove);
    }
  }

  
 

?>