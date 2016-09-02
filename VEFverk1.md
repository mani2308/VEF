# VEF

1.	Hver er munurinn á echo() og print() 
Svar: echo og print eru eiginlega það sama. Munurinn er lítill: echo er ekki með return value á meðan print er með return value af 1 svo það getur verið notað í orðasamböndum. Echo getur tekið margar parameters (hinns vegar er sá háttur sjaldgæfur) á meðan print getur tekið 1 argument. Echo er lítillega hraðari en print.


2.	Hver er munurinn á einföldum gæsalöppum og tvöföldum, sýndu mér kóðadæmi sem sýnir mismunandi niðurstöðu 
Svar: $s = "dollars";
        echo 'This costs a lot of $s.'; // This costs a lot of $s.
        echo "This costs a lot of $s."; // This costs a lot of dollars.


3.	Hvað er $GLOBALS, hvernig virkar það, komdu með dæmi. 
Svar: $GLOBALS er tilvísanir allar breytur í boði í alþjóðlegu umfangi. Tengir array sem inniheldur tilvísanir í öllum breytum sem eru nú skilgreindar í alþjóðlegum umfangi handriti. Breytilegu nöfnin eru lyklar fylkisins. 
<?php
function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>
 
 
4.	Hvenær myndir þú nota === virkjann fremur en  ==, komdu með dæmi. 
Svar: == þýðir jafnt. Skilar satt ef $x er jafnt $y. Og === þýðir alveg eins. Skilar satt ef $x er jafnt $y, og þeir eru af sömu gerð.
Dæmi ==: <?php
        $x = 100;  
        $y = "100";
        var_dump($x == $y); // returns true because values are equal
        ?>  

Dæmi ===: <?php
        $x = 100;  
        $y = "100";
        var_dump($x === $y); // returns false because types are not equal
        ?>  
 
 
5.	printf() er sniðugt af tveimur ástæðum hverjar eru þær? komdu einnig með kóðadæmi. 
Svar: 
	<?php
	$number = 9;
	$str = „Beijing“;
	printf(„There are %u million bicycles in %s.“,$number,$str);  
	?>
	Skilar út: There are 9 million bicycles in Beijing. 


6.	Hvað skrifar eftirfarandi kóði? (útskýrðu línu fyrir línu) 
$a = 1; 
$b = $a++; 
$c = ++$a; 
echo $a . $b . $c; 

Svar:  $a =1;           lætur gildið á $a verða að einum(1). 
	$b = $a++;   bætir einum(1) við $a þannig að $a er þá orðið 2
	$c = ++$a;    gildið $c bætir einum(1) í viðbót við $a og fær svo sama gildi og $a
	echo $a . $b . $c   skrifar svo út öll gildin gildin verða þá 313 í lokin
	
	
7.	Gefið er eftirfarandi array: 
$array = array("a","b",array("d","e"),"f"); 
Hvaða skipun má gefa til að fá fjölda stakanna í $array, að stökunum í innra fylkinu meðtöldum?  

 Svar:  echo describeAnidatedArray($array);


8.	Búðu til nefnt fylki (Associative array) með eftirfarandi borgum og löndum; Japan -Tokyo, Mexico Mexico City, USA - New York City, India - Mumbai, Korea - Seoul,  China - Shanghai.  Notið foreach til að birta Lönd og borgir. 
 Svar:  
<?php
	$country = array("Japan"=>"Tokyo", "Mexico"=>"Mexico City", "USA"=>"New York", "India"=>"Mumbai", "Korea"=>"Seoul", "China"=>"Shanghai");

	foreach($country as $x => $x_value) {
		echo "Land: " . $x . " - " . $x_value;
    	echo "<br>";
	}
?>

9.	Notaðu echo og list() til að birta á skjá eftrifarandi gildi úr $colors. 
$colors = array("red","blue","green");  
Svar:  <?php
$colors = array("red","blue","green");
list($a, $b, $c) = $colors;
echo "Liturnir eru, $a, $b and $c."; ?>


10.	Gefið er fylkið $states = array("Texas", "Ohio");  Bættu við aftast New York og bættu við fremst  California. (notaðu innbyggt php fall til að ná þessu fram) 
Svar:  <?php
    $states = array("California", "Texas", "Ohio", "New York"); 
    print_r($states);
   ?>
 

11  Notaðu shuffle() fallið á fylkið $states og birtu útkomuna 
Svar:  <?php
    $states = array("California", "Texas", "Ohio", "New York"); 
    shuffle($states);
    print_r($states);    ?>
 
 
12.	Birtu í töfluformi (html) eftirfarandi gögn úr fylkinu $products.  
$products = array( array ( “08:10”, “10:30”, “13:15”), array ( “GSÖ2B2U”, “VSH2B2U”, “FOR2B2U”), array ( “GUS”, “GJG”, “GRL”) );  
Sjá eftirfarandi mynd: 
 
08:10 	GSÖ2B2U 	GUS 
10:30 	VSH2B2U 	GJG 
13:15 	FOR2B2U 	GRL 

Svar:    <?php
    $products = array(
    array ("08:10", "10:30", "13:15"),
    array ("GSÖ2B2U", "VSH2B2U", "FOR2B2U"), 
    array ("GUS", "GJG", "GRL")
    );
    $Nýtt= array();
    for ($i = 0; $i < count($products); $i++) {
       $Nýtt[] = array_column($products, $i);
    }

    foreach($Nýtt as $vals) {
       echo implode(' ', $vals) . '<br>';
    }
   ?> 
 
 
13.	Gefið er eftirfarandi  $customers fylki sem geymir önnur fylki (2d array): 
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");  
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");  
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999"); 
 
Notaðu foreach og vprintf() til að birta öll gögnin á eftirfarandi sniði: 
<p>  
Name: Jason Gilmore<br />  
E-mail: jason@example.com <br /> Phone: 614-999-9999  
</p> 

Svar: 
echo "Name: ".$customers[0][0]."<br>"."E-mail: ".$customers[0][1]."<br>"."Phone: ".$customers[0][2]."<br>"."<br>";
echo $customers[1][0].": In stock: ".$customers[1][1].", sold: ".$customers[1][2].".<br>";
echo $customers[2][0].": In stock: ".$customers[2][1].", sold: ".$customers[2][2].".<br>";


14.	Hver er útkoman með að nota a) sort() fallið og hinsvegar natcasesort() á $pic? 
$pic = array("pic2.jpg", "PIC10.jpg", "pic20.jpg", "pic1.jpg"); 
 

15.	Hvað er HTTP, hvað þýðir að það sé stateless (útskýrðu). 
 

16.	Útskýrðu eftirfarandi URL (samsetningu) útfrá protocol og domains;  http://www.tskoli.is 
 

17.	Hvað er server-side scripting? Útskýrðu ferlið. 
Svar:   Server-side scripting is a technique used in web development which involves employing scripts on a web server which produce a response customized for each user's (client's) request to the website. The alternative is for the web server itself to deliver a static web page. Scripts can be written in any of a number of server-side scripting languages that are available. Server-side scripting is distinguished from client-side scripting where embedded scripts, such as JavaScript, are run client-side in a web browser, but both techniques are often used together.
