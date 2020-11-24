<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$_POST = json_decode(file_get_contents("php://input"), true);
$opcion = (isset($_POST['opcion'])) ? $_POST['opcion'] : '';
$id = (isset($_POST['id'])) ? $_POST['id'] : '';
$cliente = (isset($_POST['cliente'])) ? $_POST['cliente'] : '';
$serie = (isset($_POST['serie'])) ? $_POST['serie'] : '';
$imei = (isset($_POST['imei'])) ? $_POST['imei'] : '';
$sim = (isset($_POST['sim'])) ? $_POST['sim'] : '';
$linea = (isset($_POST['linea'])) ? $_POST['linea'] : '';
$alias = (isset($_POST['alias'])) ? $_POST['alias'] : '';
$plataforma = (isset($_POST['plataforma'])) ? $_POST['plataforma'] : '';
$stock = (isset($_POST['stock'])) ? $_POST['stock'] : '';


switch($opcion){
    case 1: //Alta
        $consulta = "INSERT INTO registroequipos (cliente, serie, imei, sim, linea, alias, plataforma, stock) 
                     VALUES('$cliente', '$serie', '$imei' , '$sim', '$linea', '$alias' , '$plataforma', '$stock') ";	
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                
        break;
    case 2: //Modificacion
        $consulta = "UPDATE registroequipos SET cliente='$cliente', serie='$serie', imei='$imei', sim='$sim', linea='$linea', alias='$alias', plataforma='$plataforma', 
        stock='$stock' WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                        
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;        
    case 3: //Borrar
        $consulta = "DELETE FROM registroequipos WHERE id='$id' ";		
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();                           
        break;         
    case 4: //Listar
        $consulta = "SELECT id, cliente, serie, imei, sim, linea, alias, plataforma, stock FROM registroequipos";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}
print json_encode($data, JSON_UNESCAPED_UNICODE);
$conexion = NULL;