<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo "Demo PHP" ?> Document</title>
</head>

<body>

  <?php

  $numero1 = 25;
  $numero2 = 45;

  $suma = $numero1 + $numero2;

  echo $suma;

  $edad = 23;

  if ($edad < 17) {
    echo "Es menor de edad";
  } else {
    echo "es mayor de edad";
  }



  $dia = 6;
  switch ($dia) {
    case '1':
      echo "Lunes";
      break;
    case '2':
      echo "Martes";
      break;
    case '3':
      echo 'Miercoles';
      break;
    case '4':
      echo 'Jueves';
      break;
    case '5':
      echo 'Viernes';
      break;
    case '6':
      echo 'Sabado';
    case '7':
      echo 'Domingo';
  }
  echo "<br>";
  echo "Continua";

  $resultado = sumar(5);

  echo $resultado;

  function sumar($a, $b = 25)
  {
    return ($a + $b);
  }

  $verdadero = !false;

  $nombre = "Juan David";
  echo "<br>";
  $verdadero = false;
  var_dump($verdadero);
  echo "<br>";
  var_dump($resultado);
  echo "<br>";
  var_dump($nombre);

  $arreglo = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];



  var_dump($arreglo2);
  echo "<br>";

  for ($i = 0; $i < count($arreglo); $i++) {
    echo "El dia es : " . $arreglo[$i];
    echo "<br>";
  }



  $arreglo2 = [];
  // array_push($arreglo, "Sabado", "Domingo");



  for ($i = 1; $i < 8; $i++) {
    switch ($i) {
      case 1:
        echo "<br>";
        array_push($arreglo2, "Lunes");
        break;
      case 2:
        echo "<br>";
        array_push($arreglo2, "Martes");
        break;
      case 3:
        echo "<br>";
        array_push($arreglo2, "Miercoles");
        break;
      case 4:
        echo "<br>";
        array_push($arreglo2, "Jueves");
        break;
      case 5:
        echo "<br>";
        array_push($arreglo2, "Viernes");
        break;
      case 6:
        echo "<br>";
        array_push($arreglo2, "Sabado");
        break;
      case 7:
        echo "<br>";
        array_push($arreglo2, "Domingo");
        break;
    }
  }
  var_dump($arreglo2);


  ?>


</body>

</html>