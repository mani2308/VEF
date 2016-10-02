<?php
    session_start(); 
 ?>
 <?php include'./includes/title.php';?>
<!DOCTYPE HTML>
<?php  include("./includes/head.php");?>
<!--<head>
    <meta charset="utf-8">
    <title>Session test</title>
</head>-->

<body>
<?php include("./includes/header.php") ?>
<div class="containall">
    <?php include("./includes/menu.php") ?>
    <main>
<form method="post" action="session_02.php">
    <p>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
    </p>
    <p>
        <label for="passw">Password:</label>
        <input type="text" name="passw" id="passw">
    </p>
    <p>
        <input type="submit" name="Submit" value="Submit">
    </p>
</form>
</main>
</div>
<?php include("./includes/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>

