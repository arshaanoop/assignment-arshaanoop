<?php
// get database connection
include_once '../server/database.php';
$database = new Database();
$db = $database->getConnection();

// instantiate product object
include_once '../server/equip.php';
$product = new Product($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));

// set product property values
$product->name = $data->name;
$product->datetime = $data->datetime;
$product->description = $data->description;
//$product->created = date('Y-m-d H:i:s');

// create the product
if($product->create()){
    echo "equipment was created.";
  }
    else{
    echo "Unable to create new equipment.";
}

?>
