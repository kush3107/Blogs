<?php
require_once "config.php";
$query="SELECT*FROM `user`";
$result=$connection->query($query);
$userDetails=$result->fetch_all(MYSQLI_ASSOC);
//var_dump($userDetails);
foreach($userDetails as $user)
{
    if($user['e-mail']===$_POST['email'])
    {
        $name = $user['user_name'];
        $media=$user['media'];
        $id=$user['id'];
    }
}
$query1="select `security_ques`,`security_ans` from `user` where `id` = '{$id}'";
$result1=$connection->query($query1);
$userDetail=$result1->fetch_assoc();
//var_dump($userDetails);
?>
<!DOCTYPE html>
    <html>
    <link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
    <head lang="en">
        <link type="text/css" rel="stylesheet" href="bootstrap.css" />

        <meta charset="UTF-8">
        <title>KUPRA | Blogs</title>
    </head>
<body class="bg-danger">
<div class="text-center">
<h2>Welcome, <?=$name?> </h2>
<img src=<?=$media?> height="200" width="180" />
</div>
<form method="post" action="pass.php">
    <label for="ques">
        <input type="text" id="ques" value=<?=$userDetail['security_ques']?> />
        <label for="ans">
            <input type="text" id="ans" name="ans" placeholder="Your security answer">
            <input type="submit" value="OK" />
            </form>
</body>
</html>
<?php

?>