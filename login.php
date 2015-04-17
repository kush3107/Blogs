<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodKamp | Log In</title>
</head>
<body>
<h1>Login Page</h1>
<h2>Enter your details:</h2>
<form method="post" action="login.php">
    <label for="email">Enter your E-mail:</label>
    <input id="email" type="text" name="email" placeholder="E-mail ID here" />
    <label for="password">Enter your password:</label>
    <input id="password" type="password" name="password" placeholder="Password" />
    <?php
    if(isset($_SESSION['error']))
    {
        if($_SESSION['error']==1) {
            $_SESSION['error'] = 0;

            echo '<span style="color: red">*E-mail or Password Incorrect</span>';
        }
    }
    ?>
    <input type="submit" value="submit" />
    </form>
</form>
</body>
</html>
<?php
require_once "config.php";
$query="select*from `user`";
$result=$connection->query($query);
$list=$result->fetch_all(MYSQLI_ASSOC);

if($_POST) {
    foreach ($list as $element) {
            if (($element['e-mail'] == $_POST['email']) && ($element['password'] == md5($_POST['password']))) {
                session_unset();
                $location = "profile.php";
                $random = rand();
                $query1 = "insert into `session`(`session_id` , `user_id`) values('{$random}','{$element['id']}')";
                $result1 = $connection->query($query1);
                setcookie("cookie", $random);
                header("Location: $location");
            }

        else{
            $_SESSION['error']=1;
            $location1="login.php";
            header("Location: $location1");
        }
    }
}
?>