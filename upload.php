<?php
//var_dump($_FILES);
$target_dir = "uploads/";
$imageFileType = pathinfo($_FILES['fileToUpload']['name'],PATHINFO_EXTENSION);

$target_file = $target_dir . time() . '.' . $imageFileType;
var_dump($target_file);
require_once "config.php";
$query1="select `user_id` from `session` where `session_id`='{$_COOKIE['cookie']}'";
$result1=$connection->query($query1);
$userId=$result1->fetch_row();
//svar_dump($userId);
$query="update `user` set `media`='{$target_file}' where `id`='{$userId[0]}'" ;
$result=$connection->query($query);


$uploadOk = 1;
//var_dump($imageFileType);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
if( $_FILES['fileToUpload']['name'] != "" )
{
    move_uploaded_file( $_FILES['fileToUpload']['tmp_name'],$target_file) or
    die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>