<?php
require_once "config.php";
$query="delete from `session` where `session_id`='{$_COOKIE['cookie']}'";
$result=$connection->query($query);
setcookie("cookie","",time()-3600);
$location="index.php";
header("Location: $location");
?>