<?php
require_once "config.php";
$query="select `user_id` from `session` where `session_id` = '{$_COOKIE['cookie']}'";
$result=$connection->query($query);
$list=$result->fetch_assoc();
//var_dump($list);
$query1="select `user_name`,`e-mail`,`Gender` from `user` where `id` = '{$list['user_id']}'";
$result1=$connection->query($query1);
$userDetails=$result1->fetch_assoc();
//var_dump($userDetails);

?>
<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<link type="text/css" rel="stylesheet" href="bootstrap.css" />

<head lang="en">
    <meta charset="UTF-8">
    <title>CodKamp | Edit Profile</title>
</head>
<body class="bg-danger">
<div class="jumbotron">
<h1>Edit Profile</h1>
</div>
<form class="form-horizontal" method="post">
    <div class="form-group">
        <label for="fullName" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-8">
            <input id="fullName" class="form-control" type="text" name="fullName" value=<?= $userDetails['user_name']?> />
        </div>
    </div>
    <div class="form-group">
        <label for="e-mail"class="col-sm-2 control-label">E-mail:</label>
        <div class="col-sm-8">
            <input id="e-mail" type="text" name="email" class="form-control" value=<?= $userDetails['e-mail'] ?> />
        </div>
    </div>
    <div class="form-group">
        <label for="e-mail"class="col-sm-2 control-label">Gender:</label>
        <div class="col-sm-8">
            <input id="e-mail" type="text" name="gender" class="form-control" value=<?= $userDetails['Gender'] ?> />
        </div>
    </div>
    <input class="btn btn-default col-lg-pull-5" type="submit" value="submit" />
</form>
<a href="pass.php">To change password click here</a>
</body>
</html>
<?php
require_once "config.php";
if($_POST){
$query2="update `user` set `user_name`='{$_POST['fullName']}',`e-mail`='{$_POST['email']}',`Gender`='{$_POST['gender']}' where `id` = '{$list['user_id']}'";
$result2=$connection->query($query2);}
?>
