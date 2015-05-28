<?php
require_once "config.php";
$query1="select `security_ques`,`security_ans` from `user` where `id` = '{$id}'";
$result1=$connection->query($query1);
$userDetail=$result1->fetch_assoc();
//var_dump($userDetails);

if($_POST) {
    if ($_POST['ans'] === $userDetail['security_ans']) {
        $location = "pass.php";
        header("Location: $location");
    } else {
        echo '<h3>Wrong answer, Try again!</h3>';
    }
}

?>
