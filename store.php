<?php
require_once "config.php";

$query="insert into `blogs` (`title`, `content`) values('{$_POST['title']} ',' {$_POST['content']} ')";
$kush=$connection->query($query);
if($kush) {
    echo "Blog successfully created!";
    $newId=$connection->insert_id;
}
else{
    //get errors
    echo $connection->error;
}
?>
