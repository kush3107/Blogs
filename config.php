<?php
//DRY-dont repeaet yourself
//kiss-keep it simple stupid
$connection = new mysqli('localhost','root','','codekamp');
if($connection->connect_error){
    echo $connection->error;
    die;
}
?>