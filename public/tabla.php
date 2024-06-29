<?php
// Puedes usar __DIR__ para obtener el directorio actual del script y luego navegar a la ubicación deseada
require __DIR__ . '/../aprendiz.php';
$aprendiz = new Aprendiz();

$personas = $aprendiz->listar();
var_dump($personas);
?>

<table>
  <thead>
      <th>ID</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Género</th>
      <th>Edad</th>
      <th>Acciones</th>
  </thead>
  <tbody>
    <?php
    foreach ($personas as $key => $value) {
      ?>
        <tr>
          <td><?php echo $value["id"] ?></td>
          <td><?php echo $value["nombre"] ?></td>
          <td><?php echo $value["apellido"] ?></td>
          <td><?php echo $value["genero"] ?></td>
          <td><?php echo $value["edad"] ?></td>
          <td>
            <form action="controlador.php" method="GET">
              <input type="hidden" value="<?php echo $value["id"] ?>" name="id">
              <button>Eliminar</button>
            </form>
          </td>
        </tr>
      <?php
    }
    ?>
    <!-- <tr>
      <td>1</td>
      <td>Daniel</td>
      <td>Gómez</td>
      <td>Masculino</td>
      <td>18</td>
    </tr> -->
  </tbody>
</table>