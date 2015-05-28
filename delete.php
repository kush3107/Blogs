<?php
require_once "config.php";
if(isset($_COOKIE['cookie'])) {
    $query = "delete from `blogs` where `id`='{$_GET['id']}'";
    $result = $connection->query($query);
    if (isset($_COOKIE['cookie'])) {
        $query2 = "select `user_id` from `session` where `session_id`='{$_COOKIE["cookie"]}'";
        $result2 = $connection->query($query2);
        $user = $result2->fetch_row();
        // var_dump($user);
        $userId = $user['0'];
        $query3 = "select `user_name` from `user` where `id`='{$userId}'";
        $result3 = $connection->query($query3);
        $userName = $result3->fetch_row();
        //  var_dump($userName);
        echo "Welcome, " . $userName[0] . "";
    }

    if ($result) {
        ?>
        <h4>Blog successfully deleted!</h4>
    <?php }
    ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <meta charset="UTF-8">
<head></head>
<br>
<a class="home" href="http://localhost/blog/profile.php">HOME</a>
<?php
}
else{
    echo '<h3>You are not logged in</h3>';
    echo '<h3>To log in click <a href="login.php">HERE</a>!</h3> ';
}?>