<!--<form method="post" action="login.php">
    <label>Innskrá</label>
        <fieldset>
           	<input type="text" name="username" placeholder="Notendanafn" required pattern="{5}" title="Notendanafn, minnst fimm stafir">
        	<input type="password" name="password" placeholder="Lykilorð" required title="Lykilorð">
		</fieldset>
	<button type="submit" class="pure-button pure-input-1 pure-button-primary">Skrá inn</button>
</form> -->

<?php
 if(isset($_POST['login']))
 {
     $uname = trim(strip_tags($_POST['username']));
     $upass = trim(strip_tags($_POST['password']));
     // Do login from Auth class
     if($user->doLogin($uname,$upass))
     {
         // Sets session on user
         $_SESSION["username"] = $uname;
         // Redirect from Auth class
         $user->redirect('upload.php');
     }
     else
     {
         // if username or password is wrong an error will happen
         $error = "Wrong Details !";
     }
 }
?>

<form method="post" action="">
    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>
    <p>
        <label for="pwd">Password:</label>
        <input type="password" name="password" id="pwd">
    </p>
    <p>
        <input name="login" type="submit" value="Log in">
    </p>
</form>

