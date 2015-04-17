<?php
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
$query1="select*from `session`";
$result1=$connection->query($query1);
$ID=$result1->fetch_all(MYSQLI_ASSOC);
if(isset($_COOKIE['cookie']))
{
    $query2="select `user_id` from `session` where `session_id`='{$_COOKIE["cookie"]}'";
    $result2=$connection->query($query2);
    $user=$result2->fetch_row();
   // var_dump($user);
    $userId=$user['0'];
    $query3="select `user_name` from `user` where `id`='{$userId}'";
    $result3=$connection->query($query3);
    $userName=$result3->fetch_row();
  //  var_dump($userName);
    echo "Welcome, ".$userName[0]."";
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <link type="text/css" rel="stylesheet" href="index.css" />
    <meta charset="UTF-8">
    <title>CodeKamp | Blogs</title>
</head>
<div class="header">
    <h1>ABESEC BLOGS</h1></div>
<div class="div">
    <body>
    <h1>All the blogs are listed below:</h1>
    <ul>
        <?php
        foreach($listOfBlogs as $blog) {
            echo '<li><a href="view.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li>';
        }
        ?>
    </ul>
</div>

<div class="center">

    <h2>To edit any blog click on it</h2>
    <ul>
        <?php
        foreach($listOfBlogs as $blog) {
            echo '<li><a href="edit.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li>';
        }
        ?>
    </ul>

</div>

<div class="delete" >
    <h2>To delete any blog click on it</h2>
    <ul>
        <?php
        foreach($listOfBlogs as $blog) {
            echo '<li><a href="delete.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li>';
        }
        ?>
    </ul>
</div>
<a href="logout.php">LogOut</a>
</body>
</html>