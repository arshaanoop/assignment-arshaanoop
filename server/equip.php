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
      $res = mysqli_query($this->conn,$query);
  if($res)
  {
    return true;
  }

}
    // read equipment
 function readAll(){
   $res = array();
  $query = "SELECT * from equipments";
  $result =  mysqli_query($this->conn,$query);
  while ($row=mysqli_fetch_assoc($result)) {
  array_push($res,$row);
  }
  return $res;
  }
function readOne(){
  $res = array();
 $query = "SELECT * from equipments WHERE id=$this->id";
 $result =  mysqli_query($this->conn,$query);
 while ($row=mysqli_fetch_assoc($result)) {
 array_push($res,$row);
 }
 return $res;

}
// update the equipment
function update(){

    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                name = '".$this->name."',
                description = '".$this->description."',
                datetime='".$this->datetime."'
            WHERE
                id = $this->id";
                $result =  mysqli_query($this->conn,$query);
                while ($row=mysqli_fetch_assoc($result)) {
                array_push($res,$row);
                }
                return $res;
  }
function delete(){

    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE id = $this->id";
    $result =  mysqli_query($this->conn,$query);
    while ($row=mysqli_fetch_assoc($result)) {
    array_push($res,$row);
    }
    return $res;
  }
}
