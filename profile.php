<?php
setcookie("couter","",time()-3600);
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
//var_dump($listOfBlogs);
$query1="select*from `session`";
$result1=$connection->query($query1);
$ID=$result1->fetch_all(MYSQLI_ASSOC);
//var_dump($ID);
if(isset($_COOKIE['cookie']))
{
    $query2 = "select `user_id` from `session` where `session_id`='{$_COOKIE["cookie"]}'";
    $result2 = $connection->query($query2);
    $user = $result2->fetch_row();

// var_dump($user);
    $userId = $user['0'];


    $query4 = "select `media` from `user` where `id`= '{$userId}'";
    $result4 = $connection->query($query4);
    $list = $result4->fetch_assoc();
//var_dump($list);

    $query3="select `user_name` from `user` where `id`='{$userId}'";
    $result3=$connection->query($query3);
    $userName=$result3->fetch_row();
  //  var_dump($userName);
   // echo "Welcome, ".$userName[0]."";
}

if(isset($_COOKIE['cookie']))
{
    ?>

    <!DOCTYPE html>
    <html>
    <link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
    <head lang="en">
        <link type="text/css" rel="stylesheet" href="bootstrap.css" />

        <meta charset="UTF-8">
        <title>KUPRA | Blogs</title>
    </head>
    <script>
        function expand(id)
        {
         document.getElementById(id).style.fontSize="2em";
        }
        var button1=document.getElementById('b1');

        function check(id)
        {
            var c=prompt("are you sure? (y/n)");
            if(c=='y')
            document.location.href="logout.php";
            else
            return false;
        }

    </script>
    <div class="header">
        <div class="pull-right">
            <a onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.2em'" style="font-size: medium" href="create.php" >Create</a> |
            <a onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.2em'" style="font-size: medium" href="editpro.php">Settings</a> |
            <a onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.2em'" id="b1" onclick="return check('b1');" href="logout.php">Sign Out</a>

        </div>
        <div class="jumbotron">
        <h1>KUPRA BLOGS</h1></div>
        <h3 onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.8em'";>Welcome, <?= $userName[0]?></h3>
        <?php
        if($list['media']!=="") {
            ?>
            <img id="img" src=<?= $list['media'] ?> height="200" width="180"/>
        <?php
        }
        else {
            ?>
            <img src="empty.png" height="200" width="150"/>
        <?php
        }
            ?>
    <div class="div">
        <body class="bg-danger">



        <h1 onclick="alert('hello!');" class="nav-tabs bg-success">All the blogs are listed below:</h1>
        <ul>
            <?php
            foreach ($listOfBlogs as $blog)
            {
                echo '<h3><li><a id="view" href="view.php?id=' . $blog['id'] . ' ">' . $blog['title'] . '</a></li></h3>';
                    echo '<em>created by, ' . $blog['creator'] . ' </em>';
                echo '<em>'.$blog['views'].' views</em>';
                echo '<br>';
                echo '<em>created at, '.$blog['creation'].' </em>';

                echo '<br>';
                if($blog['userId']===$userId)
                {
                 echo  '<a href="edit.php?id=' . $blog['id'] . ' ">Edit</a> | ';
                  echo '<a href="delete.php?id=' . $blog['id'] . ' ">Delete</a>';

                }
            }
            ?>
        </ul>

    </div>
    <br>
    <br>
    <a id="yes" onmouseover="expand('yes');" onmouseout="this.style.fontSize='1em';" href="check.php">To add a profile pic click here</a>
    <a href="editpro.php">Edit Profile</a>
        </body>
    </html>
<?php
}
else{
    echo "you are not logged in";

?>
<a href="login.php">To login click here</a>
<?php
    }
    ?>