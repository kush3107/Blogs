<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" />

    <title>KUPRA | Log In</title>
</head>
<script>
    function checkEmail(id)
    {
        if(document.getElementById(id).value.length===0||(document.getElementById('password').value.length===0)) {
            alert("Email or password is empty!");
            return false;
        }
    }

</script>
<body class="bg-danger">
<div class="jumbotron">
<h1>Login Page</h1></div>
<h2>Enter your details:</h2>
<form method="post" onsubmit="return checkEmail('email');" class="form-inline">
    <div class="form-group">
    <label for="email">Enter your E-mail:</label>
    <input id="email" class="form-control" type="text" name="email" placeholder="E-mail ID here" />
    </div>
        <div class="form-group">
    <label for="password">Enter your password:</label>
    <input id="password" class="form-control" type="password" name="password" placeholder="Password" />
        </div>

    <?php
    //var_dump($_SESSION['error']);
    if(isset($_SESSION['error']))
    {
        if($_SESSION['error']==1) {
            $_SESSION['error'] = 0;

            echo '<span style="color: red">*E-mail or Password Incorrect</span>';

        }
    }
    ?>
    <input class="btn btn-default" type="submit" value="submit" />
</form>
<a style="margin-left: 37%" href="change.php">Forgot your password?</a>
</body>
</html>
<?php
require_once "config.php";
$query="select*from `user`";
$result=$connection->query($query);
$list=$result->fetch_all(MYSQLI_ASSOC);
//var_dump($list);
if($_POST)
{
    foreach ($list as $element)
    {
        var_dump($element['e-mail']);
        if (($element['e-mail'] === $_POST['email']) && ($element['password'] === md5($_POST['password'])))
        {
            session_unset();
            $location = "profile.php";
            $random = rand();
            $query1 = "insert into `session`(`session_id` , `user_id`) values('{$random}','{$element['id']}')";
            $result1 = $connection->query($query1);
            $check=1;
            setcookie("cookie", $random);
            header("Location: $location");

        }
    }

        if(!(isset($check)&&$check===1))
        {
            $check=0;
            $_SESSION['error']=1;
            $location1="login.php";
            header("Location: $location1");
        }
    }

?>