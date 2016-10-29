<?php
session_start();
// Require db connection and auth class
require("includes/config.php");
require "includes/authenticate.php";
// $user = Auth();
$user = new Auth();
$error = '';
// If user has session he does not have to login again
if(isset($_SESSION["username"])){
    $user->redirect('upload.php');
}
/*if(isset($_SESSION["username"])){
    echo "<a href='logout.php'>Logout takkii</a>";
}*/
include './includes/title.php';
?>
<!DOCTYPE html>
<?php  include("./includes/head.php");?>
<body>
    <?php include("./includes/header.php") ?>
<div class="containall">
    <?php include("./includes/menu.php") ?>
    <main>
        <?php include("./includes/loginform.php") ?>
        
    </main>
</div>
<?php include("./includes/footer.php") ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>