<?php
setcookie("viewCheck",1);
if(isset($_COOKIE['counter']))
{
    setcookie("viewCheck","",time()-3600);
}
require_once "config.php";
$query="SELECT*FROM `blogs`";
$result=$connection->query($query);
$listOfBlogs=$result->fetch_all(MYSQLI_ASSOC);
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
    function paragraph(id)
    {
        document.getElementById(id).innerHTML="<p>hello</p>";

    }

    function rev(id){
        document.getElementById('head').innerHTML="<h1>Welcome, Guest</h1>";
    }
    function comeimg(id)
    {
        document.getElementById('head').innerHTML="<img src='nama.jpg' height='200' width='200' />";
    }
</script>
<div class="jumbotron">
    <div class="pull-right">
        <a onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.2em'" style="font-size: medium" href="signUp.php">Create Account</a> |
        <a onmouseover="this.style.fontSize='2em'"; onmouseout="this.style.fontSize='1.2em'" style="font-size: medium" href="login.php">Log In</a>
    </div>
<h1>KUPRA BLOGS</h1></div>
<h1 onmouseover="comeimg('head');" onmouseout="rev('head');" id="head">Welcome, Guest</h1>
<div class="col-md-8">
<body class="bg-danger">
<div class="col-md-12">
<h2>All the blogs are listed below:</h2>
<ul>
<?php
foreach($listOfBlogs as $blog) {
    echo '<h3><li><a href="view.php?id='.$blog['id'].' ">'.$blog['title'].'</a></li></h3>';
    echo '<em>created by, '.$blog['creator'].' </em>';
    echo '<em>'.$blog['views'].' views</em>';
    echo '<br>';
    echo '<em>created at, '.$blog['creation'].' </em>';
}
?>
</ul>
</div>
</div>
<div class="bottom">
    <p><a href="about_us.html">About Us</a> | <a href="contact_us.html">Contact Us</a> | Privacy | Terms Of Service</p>
</div>

</body>
</html>