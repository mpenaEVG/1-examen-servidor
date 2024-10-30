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
  echo "</br><h3>Nombre: ". $nombreCompleto ."</h3> 
    </br> <h3>Numero de caracteres: ". $obj->contarCaracteres($nombreCompleto) ."</h3> 
    </br> <h3>Provincia: ". $provincia ."</h3>";

