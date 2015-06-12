<?php
//var_dump($_POST);
require_once "config.php";
$query1="select `security_ques`,`security_ans` from `user` where `id` = '{$_GET['id']}'";
$result1=$connection->query($query1);
$userDetail=$result1->fetch_assoc();
//var_dump($userDetails);

if($_POST) {
    if ($_POST['ans'] === $userDetail['security_ans']) {?>
<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<head lang="en">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" />

    <meta charset="UTF-8">
    <title>KUPRA | Blogs</title>
</head>
<body class="bg-danger">
<h1 class="jumbotron">New Password</h1>
<form method="post" class="form-inline">
    <div class="form-group">
        <label for="email">Type a new password:</label>
        <input id="pass1" class="form-control" type="password" name="email" placeholder="Password here" />
    </div>
    <div class="form-group">
        <label for="password">Retype your password:</label>
        <input id="pass2" class="form-control" type="password" name="password" placeholder="Retype password" />
</div>
    <input class="btn btn-default" type="submit" value="submit" />

    </div>
    </form>

</body>
<?php
    } else {
        echo '<h3>Wrong answer, Try again!</h3>';
    }
}

?>
