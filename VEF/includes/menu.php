
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav>
	<h3>Sites:</h3>
	<ul>
		<li>
			<a href="index.php" <?php if ($currentPage == "index.php") { echo "class=\"current\""; } ?>>Home</a>
		</li>
		<li>
			<a href="ummig.php" <?php if ($currentPage == "ummig.php") { echo "class=\"current\""; } ?>>About me</a>
		</li>
		<li>
			<a href="browse.php?img=0" <?php if ($currentPage == "browse.php") { echo "class=\"current\""; } ?>>Browse</a>
		</li>
		<li>
			<a href="login.php" <?php if ($currentPage == "login.php") { echo "class=\"current\""; } ?>>Login</a>
		</li>
		<li>
			<a href="register.php" <?php if ($currentPage == "register.php") { echo "class=\"current\""; } ?>>Register</a>
		</li>
		<li>
			<a href="upload.php" <?php if ($currentPage == "upload.php") { echo "class=\"current\""; } ?>>Upload</a>
		</li>
	</ul>
</nav>