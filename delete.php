<?php
require_once "config.php";
$query="delete from `blogs` where `id`='{$_GET['id']}'";
$result=$connection->query($query);
if($result){
    echo "successful";
}
?>