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
    <title>CodeKamp | list of all blogs</title>
</head>
<body>
<h1 style="text-align: center">All the blogs are listed below:</h1>


<ul>
<?php


foreach($listOfBlogs as $blog) {
    echo "<li>$blog['title']" "</li>";
}

?>
</ul>
</body>
</html>