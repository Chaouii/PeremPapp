<?php
// include database and object files
include_once '../config/db.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();
 
// prepare user object
$user = new User($db);
// set ID property of user to be edited
$user->mail = isset($_GET['mail']) ? $_GET['mail'] : die();
$user->password = isset($_GET['password']) ? $_GET['password'] : die();
// read the details of user to be edited
$stmt = $user->login();
if($stmt->rowCount() > 0){
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Login success",
        "id" => $row['id'],
        "mail" => $row['mail']
    );
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid mail or Password!",
    );
}
// make it json format
echo json_encode($user_arr);
?>