<?php 

include_once("persona.php");
include_once("database.php");

class Aprendiz extends Persona{

  protected $db;
  protected $connection;

  public function __construct()
  {
    parent::__construct();
    $this->db = new Database();
  }
}


?>