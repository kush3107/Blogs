<?php
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
var_dump($listOfBlogs);
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp | list of all blogs</title>
</head>
<body>


<ul>
<?php

foreach($listOfBlogs as $blog) {


  <a href="view.php?id='$blog['id']'">  $blog['title'] </a>
    echo "<br>";
}

?>
</ul>
</body>
</html>