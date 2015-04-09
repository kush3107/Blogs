<?php
require_once "config.php";

if(count($_POST))
{
    var_dump($_POST);
    $query="insert into `blogs` (`title`, `content`) values('{$_POST['title']} ',' {$_POST['content']} ')";
$kush=$connection->query($query);

    echo "Blog successfully created!";
    $newId=$connection->insert_id;
    var_dump($_POST);

}
?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp | Create new blog</title>
    </head>
<body>
<h2>Enter the fields below to create a new blog</h2>
<form method="post">
    <label for="title">Enter the title for your blog:</label>
    <input id="title" type="text" name="title" placeholder="Enter title" />
    <br></br>
    <label for="content">Enter the contents of the blog:</label>
    <textarea id="content" type="text" name="content" placeholder="Enter the contents" ></textarea>
    <br></br>
    <input type="submit" value="submit" >
</form>
<a class="home" href="http://localhost/blog/">HOME</a>
</body>
</html>
