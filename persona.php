
<?php

  require __DIR__ . "/database.php";

  class Persona{
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $genero;
    protected $edad;

    protected $db;
    protected $connection;

    public function __construct(){
      $this->db = new Database();
      $this->connection = $this->db->getConnection();
    }

  public function getId(){
    // return $this->nombre;
  }
  public function getNombre(){
    // return $this->nombre;
  }
  public function getApellido(){
    // return $this->apellido;
  }
  public function getGenero(){
    // return $this->genero;
  }
  public function getEdad(){  
    // return $this->edad;
  }

  public function setId($id){
    $this->id = $id;
    // return $this;
  }
  public function setNombre($nombre){
    $this->nombre = $nombre;
    // return $this;
  }
  public function setApellido($apellido){
    $this->apellido = $apellido;
    // return $this;
  }
  public function setGenero($genero){
    $this->genero = strtolower($genero);
    // return $this;
  }
  public function setedad($edad){
    $this->edad = $edad;
    // return $this;
  }
  
  //Metodos
  
  public function Guardar(){
    $sql = "INSERT INTO aprendiz(nombre, apellido, genero, edad) VALUES (:nombre, :apellido, :genero, :edad)";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(":nombre", $this->nombre);
    $stm->bindParam(":apellido", $this->apellido);
    $stm->bindParam(":genero", $this->genero);
    $stm->bindParam(":edad", $this->edad);
    $stm->execute();
  }

  public function Listar(){
    $sql = "SELECT * FROM aprendiz";
    $stm = $this->connection->prepare($sql);
    $stm->execute();
    return $stm->fetchAll();
  }

  public function Eliminar(){
    $sql = "DELETE FROM aprendiz WHERE id = :id";
    $stm = $this->connection->prepare($sql);
    $stm->bindParam(":id", $this->id);
    $stm->execute();
  }
  
}
?>