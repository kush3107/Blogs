<?php
require_once "config.php";
$query="delete from `blogs` where `id`='{$_GET['id']}'";
$result=$connection->query($query);
if($result){?>
    <h4>Blog successfully deleted!</h4>
<?php }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <meta charset="UTF-8">
<head></head>
<br>
<a class="home" href="http://localhost/blog/">HOME</a>