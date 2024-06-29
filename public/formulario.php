<form action="controlador.php" method="POST">
  <div>
    <label for="nombre">Nombre</label>
    <input type="text" id="Nombre" name="nombre">
  </div>
  <div>
    <label for="Apellido">Apellido</label>
    <input type=" text" id="Apellido" name="apellido">
  </div>
  <div>
    <label for="Genero">Masculino</label>
    <input type="radio" id="Genero" name="genero" value="masculino">
    <label for="Genero">Femenino</label>
    <input type="radio" id="Genero" name="genero" value="femenino">
  </div>
  <div>
    <label for="Edad">Edad</label>
    <input type="number" id="edad" name="edad">
  </div>
  <button type="submit">Enviar</button>
</form>