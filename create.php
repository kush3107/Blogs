<?php
require_once "config.php";
if(isset($_COOKIE['cookie']))
{
    $query2 = "select `user_id` from `session` where `session_id`='{$_COOKIE["cookie"]}'";
    $result2 = $connection->query($query2);
    $user = $result2->fetch_row();

// var_dump($user);
    $userId = $user['0'];
}
$query3="select `user_name` from `user` where `id`='{$userId}'";
$result3=$connection->query($query3);
$userName=$result3->fetch_row();
if(count($_POST))
{
   // var_dump($_POST);
    $time=time();
    $query="insert into `blogs` (`userId`,`title`, `content`,`creator`,`creation`) values('{$userId}','{$_POST['title']} ',' {$_POST['content']} ','{$userName[0]}',CURRENT_TIMESTAMP )";
    $kush=$connection->query($query);

    echo "Blog successfully created!";
    $newId=$connection->insert_id;
    //var_dump($_POST);

}
?>

<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<head lang="en">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" />

    <meta charset="UTF-8">
    <title>KUPRA | Create new blog</title>
    </head>
<body class="bg-danger">
<h2 class="text-center">Enter the fields below to create a new blog:</h2>
<form method="post" class="form-horizontal">
    <div class="form-group">
    <label for="title" class="col-sm-2">Enter the title for your blog:</label>
    <input id="title" class="form-control" type="text" name="title" placeholder="Enter title" />
    </div>
    </div>
    <div class="form-horizontal">
    <label for="content" class="col-sm-4">Enter the contents of the blog:</label>
    <textarea id="content" class="form-control" type="text" name="content" placeholder="Enter the contents" ></textarea>
    <br></br>
    <input class="btn btn-default pull-left" type="submit" value="submit" >
</form>
<a class="btn btn-default pull-right" href="http://localhost/blog/profile.php">HOME</a>
</body>
</html>