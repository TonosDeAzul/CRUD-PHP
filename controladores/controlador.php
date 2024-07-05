<?php
  require __DIR__ . "/../clases/aprendiz.php";

  if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // function validarCampo($valor, $nombreCampo)
  // {
  //   if (empty($valor)) {
  //     echo "Error: El campo '$nombreCampo' está vacío.";
  //     return false;
  //   }
  //   return true;
  // }

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $genero = $_POST["genero"];
    $edad = $_POST["edad"];

    $aprendiz = new Aprendiz();
    $aprendiz->setNombre($nombre);
    $aprendiz->setApellido($apellido);
    $aprendiz->setGenero($genero);
    $aprendiz->setEdad($edad);
    $aprendiz->Guardar();

    header("Location: ../index.php");
  }

  if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $id = $_GET["id"];
    $aprendiz = new Aprendiz();
    $aprendiz->setId($id);
    $aprendiz->Eliminar();
    header("Location: ../index.php");
  }


