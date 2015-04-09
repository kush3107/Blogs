<?php
require_once "config.php";
$query = "SELECT * FROM `blogs` where `id` =" .$_GET['id'];
$result=$connection->query($query);
$kush=$result->fetch_assoc();
?>

    <!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp | <?= $blog['title'] ?></title>
</head>
<body>
<h2>Title</h2>
<p><?= $kush['title'] ?></p>
<h2>Content</h2>
<p><?= $kush['content'] ?>

    </body>
</html>

