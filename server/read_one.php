<?php
// include database and object files
include_once '../server/database.php';
include_once '../server/equip.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$product = new Product($db);

// get id of product to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of product to be edited
$product->id = $data->id;

// read the details of product to be edited
//$product->readOne();
$result = $product->readOne();
//$num = $stmt->rowCount();
$res=array(
  "data"=>$result
);
// json format output
echo json_encode($res);

?>
