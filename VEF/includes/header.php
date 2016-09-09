<?php
//Velur random mynd í header
    $dir = 'img/header/';
    if (isset($_SESSION["files"]) == false || count($_SESSION["files"]) == 0) {
    	$_SESSION["files"] = glob("{$dir}*.{jpg,png,gif,jpeg}", GLOB_BRACE);
    }
    shuffle($_SESSION["files"]);
    $imgpath = $_SESSION["files"][0];
    unset($_SESSION["files"][0]);
    $qoutes = array("We need to turn the power on! It's like deja vu all over again." , "Whoo! More shit to kill with!", "NO! NO VODKA FOR YOU!" , "Out of my way, suka!" , "I will show them the path!" , "You kill me? No! I kill you." , "Do you feel it? Oh I hope they feel it..." , "I'm going to kill SOOOOO many now." );
    shuffle($qoutes);
  ?>
<header class="custom-wrapper pure-g" id="menu" style="background-image: url('<?php echo $imgpath; ?>')">
	<div>
		<a href="index.php" class="headerlink"><h1 class="_i_myndun">Call of Duty Zombies</i></h1></a><br>
	</div>
	<div class="quote">
		<p>-<?php echo $qoutes[0]; ?></p>
	</div>
</header>