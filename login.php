<?php
/**
 * Created by PhpStorm.
 * User: Kushagra
 * Date: 16-04-2015
 * Time: 23:12
 */
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodKamp | Log In</title>
</head>
<body>
<h1>Enter your details</h1>
<form method="post" action="login.php">
    <label for="email">Enter your E-mail:</label>
    <input id="email" type="text" name="email" placeholder="E-mail ID here" />
    <label for="password">Enter your password:</label>
    <input id="password" type="password" name="password" placeholder="password" />
    <?php
    if(isset($_GET['error']))
    {
        if($_GET['error']==1)
    echo '<span style="color: red">*E-mail or Password Incorrect</span>';
    }
    ?>
    <input type="submit" value="submit" />
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
        if (($element['e-mail'] == $_POST['email']) && ($element['password'] == $_POST['password']))
        {
            $location = "profile.php";
            $error=0;
            header("Location: $location");
        }
        else{
            $error=1;
            $location1="login.php?error=".$error;
            header("Location: $location1");
        }
    }
}
?>