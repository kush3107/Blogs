<?php
require_once "config.php";
$query = "SELECT * FROM `blogs` where `id` =" .$_GET['id'];
$result=$connection->query($query);
$kush=$result->fetch_assoc();
if($kush['views']===0) {
    $c=0;
    $c++;
    $query1 = "update `blogs` set `views`='{$c}' where id='{$_GET['id']}'";
    $result1 = $connection->query($query1);
}
else{
    $c=$kush['views'];
    $c++;
    $query1 = "update `blogs` set `views`='{$c}' where id='{$_GET['id']}'";
    $result1 = $connection->query($query1);
}
?>

    <!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" />

    <title>KUPRA | Blog View </title>
</head>
<body class="bg-danger">

<div class="bg-info col-md-6 text-center">
<h2 class="text-center">Title</h2>
<p class="text-center"><?= $kush['title'] ?></p>
<h2 class="text-center">Content</h2>
<p class="text-center"><?= $kush['content'] ?>
</div>
<br>
<div class="top-left bottom">
    <?php if(isset($_COOKIE['cookie'])) { ?>
    <a href="profile.php" class="btn btn-default pull-left">HOME</a> <?php } ?>
    <?php if(!isset($_COOKIE['cookie'])) { ?>
    <a href="index.php" class="btn btn-default pull-left">HOME</a> <?php } ?>
</div>

    </body>
</html>

