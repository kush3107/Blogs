<?php
require_once "config.php";
$query = "SELECT `title`,`content` FROM `blogs` where `id` =" .$_GET['id'];
$result=$connection->query($query);
$listOfBlogs=$result->fetch_assoc();

if(count($_POST)){
$query1="update `blogs` set `title`='{$_POST['title']}' , `content`='{$_POST['content']}' where id='{$_GET['id']}'";
$result1=$connection->query($query1);}
if(isset($result1)&&$result1)
{
    $newId=$connection->insert_id;
}
else{
    echo $connection->error;
}
?>

<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<head lang="en">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" />
    <meta charset="UTF-8">
    <title>KUPRA | Edit blog</title>
</head>


<body class="bg-danger">
<div class="jumbotron">
<h1>Edit the fields below to edit your blog:</h1>
</div>
<form method="post">
    <div class="form-group">
    <label for="title" class="col-sm-2 control-label">Edit the title for your blog:</label>
        <div class="col-sm-8">
    <input id="title" type="text" class="form-control" name='title' value=<?= $listOfBlogs['title'] ?> />
            </div>
        </div>
    <br></br>
    <div class="form-group">
    <label for="content" class="col-sm-2 control-label">Edit the contents of your blog:</label>
        <div class="col-sm-8">
    <textarea id="content" type="text" class="form-control" name="content" placeholder="enter the content" ><?= $listOfBlogs['content'] ?></textarea>
    </div>
        </div>
    <input type="submit" class="btn btn-default" value="OK" >
</form>
<div class="pull-left">
<a class="btn btn-default pull-left"  href="http://localhost/blog/profile.php">HOME</a>
</div>
</body>
</html>

