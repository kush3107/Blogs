

<!DOCTYPE html>
<html>
<link rel="icon" href="kuPra.png" type="image/png" sizes="16x16">
<link type="text/css" rel="stylesheet" href="bootstrap.css" />

<head lang="en">
    <meta charset="UTF-8">
    <title>KUPRA | Sign Up</title>
</head>
<script>
    function checkAddress()
    {
        var val=document.getElementById('fullName').value.length;
        var val1=document.getElementById('password').value.length;
        var val4=document.getElementById('e-mail').value.length;

        var val2=document.getElementById('sec_ques').value.length;
        var val3=document.getElementById('sec_ans').value.length;
        if(val===0||val1===0||val2===0||val3===0||val2=='-----Choose a question------'||val4===0) {

            alert("You have left a compulsory field empty!");
            return false;
        }
    }
</script>
<body class="bg-danger">
<div class="jumbotron">
<h1>Please fill the form to Sign Up</h1></div>
<form class="form-horizontal" onsubmit="return checkAddress();" method="post" action="confirm.php" enctype="multipart/form-data">
    <div class="form-group">
    <label for="fullName" class="col-sm-2 control-label">Enter your full name:<span style="color: red">*</span></label>
        <div class="col-sm-8">
    <input id="fullName" class="form-control" type="text" name="fullName" placeholder="Enter your name" />
        </div>
    </div>
    <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 4) {
            echo '<span style="color: red">*Name cannot be empty</span>';
        }
    }
         ?>

    <div class="form-group">
    <label for="e-mail"class="col-sm-2 control-label">Enter your E-mail:<span style="color: red">*</span></label>
        <div class="col-sm-8">
    <input id="e-mail" type="text" name="email" class="form-control" placeholder="E-mail Here" />
        </div>
    </div>
    <?php
    if(isset($_GET['emailerror']))
    {
        if($_GET['emailerror']==1)

    {
    echo '<span style="color: red">*E-mail already taken</span>';
    }
        if($_GET['emailerror']==3)
            echo '<span style="color: red">*E-mail cannot be empty</span>';
    }
    ?>
    <div class="form-group">
    <label for="password" class="col-sm-2 control-label">Choose a password:<span style="color: red">*</span></label>
        <div class="col-sm-8">
    <input id="password" type="password" name="password" class="form-control" placeholder="Password" />
        </div>
    </div>


    <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 2) {
            echo '<span style="color: red">*Password cannot be empty</span>';
        }
    }
?>
    <div class="form-group">
        <label for="sec_ques" class="col-sm-2 control-label">Choose a Security Question:<span style="color: red">*</span></label>
    <select name="sec_ques" class="form-control col-sm-6">
        <option>-----Choose a question------</option>
        <option>What is your phone number?</option>
        <option>What is your father's name?</option>
        <option>What is your address?</option>
        <option>What is your mother's name?</option>
    </select>
    </div>
    <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 6) {
            echo '<span style="color: red">*Choose a question</span>';
        }
    }
    ?>
    <div class="form-group">
    <label for="ans" class="col-sm-2 control-label">Choose a answer:<span style="color: red">*</span></label>
        <div class="col-sm-8">
    <input type="text" name="sec_ans" class="form-control" id="ans" placeholder="Choose a answer" />
    </div></div>
    <?php
    if(isset($_GET['emailerror'])) {
        if ($_GET['emailerror'] == 5) {
            echo '<span style="color: red">*Answer cannot be empty</span>';
        }
    }
    ?>
    <div class="form-group">
        <label for="fileToUpload" class="control-label col-sm-8">
        Select image to upload:
            </label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input class="btn btn-default col-lg-pull-5" type="submit" value="submit" />

</div>
    </form>
</body>
</html>