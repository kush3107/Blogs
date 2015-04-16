

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodKamp | Sign Up</title>
</head>
<body>
<h1>Please fill the form to Sign Up</h1>
<br>
<form method="post" action="confirm.php">
    <label for="fullName">Enter your full name:</label>
    <input id="fullName" type="text" name="fullName" placeholder="Enter your name" />
    <label for="e-mail">Enter your E-mail:</label>
    <input id="e-mail" type="text" name="email" placeholder="E-mail Here" />
    <?php
    if(isset($_GET['emailerror']))
    {
        if($_GET['emailerror']==1)

    {
    echo '<span style="color: red">*E-mail already taken</span>';
    }
        if($_GET['emailerror']==3)
            echo '<span style="color: red">*E-mail cannot be empty</span>';
    }
    ?>
    <label for="password">Choose a password:</label>
    <input id="password" type="password" name="password" placeholder="Password" />
    <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 2) {
            echo '<span style="color: red">*Password cannot be empty</span>';
        }
    }
?>
    <input type="submit" value="submit" />
    </form>
</body>
</html>

