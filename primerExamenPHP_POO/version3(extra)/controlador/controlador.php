<?php 
  
  include 'clase.php';

  if(!empty($_POST['nombre'])){
    $nombre = $_POST['nombre'];
  }

  if(!empty($_POST['apellido'])){
    $apellido = $_POST['apellido'];
  }
  if(isset($_POST['formato'])){
    $formato = $_POST['formato'][0];
  }
  if(!empty($_POST['provincia'])){
    $provincia = $_POST['provincia'];
  }

  $obj = new Formato($nombre,$apellido);

  $longitud = $obj->longitud; 

  switch($formato){
    case 'Apellido,Nombre': 
      $nombreCompleto = $obj->formatoAN();
      break;
    case 'Nombre Apellido': 
      $nombreCompleto = $obj->formatoNA();
      break;
    default:
      break;

  }
  
  require '../vista/mostrar.php';

