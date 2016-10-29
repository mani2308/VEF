<?php
if(isset($_POST['register'])) {
 
    $uname = trim(strip_tags($_POST['username-reg']));
    $upass = trim(strip_tags($_POST['password-reg']));
    //$email = trim(strip_tags($_POST['email-reg']));
    //$rname = trim(strip_tags($_POST['name-reg']));
    // Check if everyting is ok with register form
    if ($uname == "") {
        // if username field is blank
        $error = "provide username!";
    } else if ($upass == "") {
        // if password is blank
        $error = "provide password!";
    } else if (strlen($upass) < 6) {
        // if password is less than 6 chars
        $error = "Password must be atleast 6 characters";
    } else {
        try {
            // Run query to check if user is already in the db
            $stmt = $user->runQuery("SELECT username FROM users WHERE username=:uname");
            $stmt->execute(array(':uname' => $uname));
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row['username'] == $uname) {
                // if user exist an error is thrown
                $error = "sorry username already taken !";
                }   
             else {
                // if username does not exist we put him to db
                if ($user->register($uname, $upass)) { // Sets input fields to register function in Auth class
                    $_SESSION["username"] = $uname; // Setur session á userinn svo að þú getur unnið með hann þegar hann er búinn að logga sig inn
                    $user->redirect('upload.php'); // Þegar user er búinn að registera þá fer hann inná þessa síðu
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
?>
<form action="" method="POST">
    <p>
        <label for="username-reg">Username:</label>
        <input type="text" name="username-reg" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password-reg" name="password-reg" id="pwd">
    </p>
    <p>
        <label for="conf_pwd">Retype Password:</label>
        <input type="password-reg" name="password-reg2" id="conf_pwd">
    </p>
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>