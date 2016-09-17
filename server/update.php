<?php
// include database and object files
include_once '../server/database.php';
include_once '../server/equip.php';

// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare equip object
$equip = new Product($db);

// get equip_id of equip to be edited
$data = json_decode(file_get_contents("php://input"));

// set equip_id property of equip to be edited
$equip->id = $data->id;

// set equip property values
$equip->name = $data->name;
$equip->datetime = $data->datetime;
$equip->description = $data->description;

// update the equip
if($equip->update()){
    echo "equip was updated.";
}

// if unable to update the equip, tell the user
else{
    echo "Unable to update equip.";
}
?>
