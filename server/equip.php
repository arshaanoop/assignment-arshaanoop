<?php
class Product{
    // database connection and table name
    private $conn;
    private $table_name = "equipments";

    // object properties
    public $id;
    public $name;
    public $description;
    public $datetime;
    public $created;

    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
function create(){

    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
          (name,description,datetime) values('".$this->name."','".$this->description."','".$this->datetime."')";
    // prepare query
    $res = mysqli_query($this->conn,$query);
  if($res)
  {
    return true;
  }

  }
