<?php
/**
 * Created by PhpStorm.
 * User: Kushagra
 * Date: 16-04-2015
 * Time: 19:21
 */require_once "config.php";
$query="select*from `user`";
$result=$connection->query($query);
//var_dump($_POST);
$userElements=$result->fetch_all(MYSQLI_ASSOC);
//var_dump($userElements);

foreach ($userElements as $eMail)
{
   // var_dump($eMail);
    //var_dump($_POST);
      $one=$eMail['e-mail'];
    $two=$_POST['email'];
     if($one==$two)
        {
          $emailError = 1;
           $emailRedirect="signUp.php?emailerror=".$emailError;
            header("Location: $emailRedirect");
        }



}
if($_POST['password']=='')
{
    $emailError = 2;
$emailRedirect="signUp.php?emailerror=".$emailError;
header("Location: $emailRedirect");
}
if($_POST['email']=='')
{
    $emailError=3;
    $emailRedirect="signUp.php?emailerror=".$emailError;
    header("Location: $emailRedirect");

}
    $query1=" insert into `user` ( `user_name`, `e-mail` , `password` ) values ('{$_POST['fullName']}','{$_POST['email']}','{$_POST['password']}')";
    $result1=$connection->query($query1);
    echo "Sign Up successful";
    $location="login.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<a href="login.php">To login click here</a>
</body>
</html>


