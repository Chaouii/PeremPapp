<?php
// include database and object files
include_once '../config/db.php';
include_once '../objects/product.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 $json_array=array();

// prepare product object
$product = new product($db);
// set ID property of user to be edited
$product->user_id = isset($_GET['user_id']) ? $_GET['user_id'] : die();
// read the details 
$stmt = $product->getProduct();
while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
$json_array[]=$row;
}

// make it json format
echo json_encode($json_array);

?>