<?php
// include database and object file
include_once '../server/database.php';
include_once '../server/equip.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare product object
$product = new Product($db);

// get product id
$data = json_decode(file_get_contents("php://input"));

// set product id to be deleted
$product->id = $data->id;

// delete the product
if($product->delete()){
    echo "equipment was deleted.";
}

// if unable to delete the product
else{
    echo "Unable to delete equipment.";
}
?>
