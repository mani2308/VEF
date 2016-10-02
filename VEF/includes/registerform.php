
<!--<form method="post" action="register.php">
    <label>Nýskrá</label>
        <fieldset>
           	<input type="text" name="username" placeholder="Notendanafn" required pattern="{5}" title="Notendanafn, minnst fimm stafir">
           	<input type="netfang" name="netfang" placeholder="Netfang" required title="Netfang">
        	<input type="password" name="password" placeholder="Lykilorð" required title="Lykilorð">
		</fieldset>
	Skrá inn</button>
</form>
<div class="g-recaptcha" data-sitekey="6LdLtxcTAAAAAJrk7gzmEJmNJYoGyt9kpqBDm3_g"></div>
	<button type="submit" class="pure-button pure-input-1 pure-button-primary">
-->

	<?php  
if (!empty($_POST["g-recaptcha-response"])){
	$response = $_POST["g-recaptcha-response"];
	$secret = "6LdLtxcTAAAAAPl7aQ1Oa7Sm7vAVAj5k8FKO2Rqg";
	$remoteip = $_SERVER['REMOTE_ADDR'];
	echo $response;
}
if (isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = trim($_POST['pwd']);
    $retyped = trim($_POST['conf_pwd']);
    $userfile = 'C:/private/encrypted.csv';
    require_once 'register_user_csv.php';
}
?>

<?php
if (isset($result) || isset($errors)) {
    echo '<ul>';
    if (!empty($errors)) {
        foreach ($errors as $item) {
            echo "<li>$item</li>";
        }
    } else {
        echo "<li>$result</li>";
    }
    echo '</ul>';
}
?>

<form action="" method="post">
        <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd">
    </p>
    <p>
        <label for="conf_pwd">Retype Password:</label>
        <input type="password" name="conf_pwd" id="conf_pwd">
    </p>
    <div class="g-recaptcha" data-sitekey="6LdLtxcTAAAAAJrk7gzmEJmNJYoGyt9kpqBDm3_g"></div>
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>