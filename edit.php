<?php
require_once "config.php";
$query = "SELECT * FROM `blogs` where `id` =" .$_GET['id'];
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
$kush=$listOfBlogs[0];
$query1="update `blogs` set `title`='{$_POST['title']}' `content`='{$_POST['content']}'"
$result1=$connection->query($query1);
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>CodeKamp | Edit blog</title>
</head>
<body>
<h2>Edit the fields below to edit a blog</h2>
<form method="post">
    <label for="title">Edit the title for your blog:</label>
    <input id="title" type="text" value="<?php echo $kush['title']; ?>" />

    <br></br>
    <label for="content">Edit the contents of your blog:</label>
    <textarea id="content" type="text" name="content" placeholder="enter the content" ><?= $kush['content'] ?></textarea>
    <br></br>
    <input type="submit" value="submit" >
</form>
</body>
</html>

