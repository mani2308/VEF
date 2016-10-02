<?php
// initiate session
session_start();
// check that form has been submitted and that name is not empty
if ($_POST && !empty($_POST['name'])) {
    // set session variable
    $_SESSION['name'] = $_POST['name'];
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Session test 2</title>
</head>

<body>
<?php
if ($data = ) {
            $_SESSION['authenticated'] = 'Mani';
            $_SESSION['start'] = time();
            session_regenerate_id();
}

    if (isset($_SESSION['authenticated'])) {
        header("Location: $redirect");
        exit;
    } else {
        $error = 'Invalid username or password.';
    }
// check session variable is set
if (isset($_SESSION['name'])) {
    // if set, greet by name
    echo 'Welcome, ' . $_SESSION['name'] . '. <a href="session_03.php">Next</a>';
} else {
    // if not set, send back to login
    echo 'Who are you? <a href="session_01.php">Login</a>';
}
?>
</body>
</html>

<?php

?>