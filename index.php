<?php
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
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

    <h2><a href="create.php"> To create a blog click on this link</a></h2>
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
<div class="header" id="footer">
    <p>About Us | Contact Us | Privacy | Terms Of Service</p>
</div>
</body>
</html>