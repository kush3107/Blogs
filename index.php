<?php
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp | Blogs</title>
</head>
<div class="div"></div>
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
<div class="div">
    <h2><a href="create.php"> To create a blog click on this link</a></h2>
</div>
<div class="div">
    <h2>To edit any blog click on it</h2>
    <ul>
        <?php
        foreach($listOfBlogs as $blog) {
            echo '<li><a href="edit.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li>';
        }
        ?>
    </ul>

</div>
<div class="div" id="link">
<h2>To delete any blog click on it</h2>
    <ul>
        <?php
        foreach($listOfBlogs as $blog) {
            echo '<li><a href="view.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li>';
        }
        ?>
    </ul>
</div>
</body>
</html>