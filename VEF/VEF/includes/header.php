<?php
//Velur random mynd í header
   /* $dir = 'img/header/';
    if (isset($_SESSION["files"]) == false || count($_SESSION["files"]) == 0) {
        $_SESSION["files"] = glob("{$dir}*.{jpg,png,gif,jpeg}", GLOB_BRACE);
    }
    shuffle($_SESSION["files"]);
    $imgpath = $_SESSION["files"][0];
    unset($_SESSION["files"][0]);*/

      $images = [
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-01',
     'caption' => 'Operators'],
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-02',
     'caption' => 'Attackers against Defenders'],
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-03',
     'caption' => 'GSG 9'],
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-04',
     'caption' => 'SAS'],
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-01',
     'caption' => 'GIGN'],
    ['file'    => 'Rainbow-Six-Siege-Operators-Wallpaper-01',
     'caption' => 'Breach and clear'],
    ];
    $i = rand(0, count($images)-1);
    $selectedImage = "indexZ/{$images[$i]['file']}.jpg";
    $caption = $images[$i]['caption'];
    if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
    }

    $qoutes = array("FOOKIN LASER SIGHTS." , "I'm only mockin about, relax -Smoke", "Before we start does anyone wana bail out. -Jäger" , "Remeber Point your gun at the bad guys -Blitz" , "EDD mounted.. let them come -Kapkan" , "A 6-inch blade never loses reception. -Thatcher" , "Smart, brave, lucky, you still die. -Bandit" , "Some serious drywall work coming up! -Thermite" );
    shuffle($qoutes);
  ?>
<header class="custom-wrapper pure-g" id="menu" style="background-image: url('<?php echo $selectedImage; ?>')">
    <div>
        <a href="index.php" class="headerlink"><h1 class="_i_myndun"><<?php echo "caption"; ?></i></h1></a><br>
    </div>
    <div class="quote">
        <p>-<?php echo $qoutes[0]; ?></p>
    </div>
</header>