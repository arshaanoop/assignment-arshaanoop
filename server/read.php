<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// include database and object files
include_once '../server/database.php';
include_once '../server/equip.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// query products
$result = $product->readAll();
//$num = $stmt->rowCount();
$res=array(
  "data"=>$result
);
// json format output
echo json_encode($res);
?>
