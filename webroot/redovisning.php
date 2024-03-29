<?php 
/**
 * This is a BWi pagecontroller.
 *
 */
// Include the essential config-file which also creates the $bwix variable with its defaults.
include(__DIR__.'/config.php'); 

//include(__DIR__ . '/theme/functions.php');
//echo __DIR__ . "--1<br>";

//global string $mepath;
//Me-path from redivisning x-cc
//include 'theme\functions.php';
//echo url() . "--2<br>";
$mepath = url() . '/../me.php';
//Secho "<br> Mee-path" . $mepath;

//echo $_SERVER['HTTP_HOST'] . "--3<br>";
//echo $_SERVER['REQUEST_URI'] . "--4<br>";



// Do it and store it all in variables in the BWi container.
$bwix['title'] = "Redovisning";
// Fixa länkarna både statiska och dynamiska
$bwix['paths'] = '<p>me-sida:<a href="http://www.student.bth.se/~bjvi13/oophp/kmom01/kmom01Mall/webroot/me.php">me-sidan</a>';
$bwix['paths'] .= '<p>bwix: <a href="http://www.student.bth.se/~bjvi13/oophp/kmom01/kmom01Mall/webroot/hello.php">bwix-sidan</a>' ;
$bwix['paths'] .= '<p>me-sida:<a href="' . $mepath . '">me-sidan</a>';
$bwix['paths'] .= '<p>bwix:<a href="' . $mepath . "/../hello.php" . '">bwix-sidan</a>';


$bwix['main'] = <<<EOD
<article class="readable">

<h1>Redovisning av kursmomenten</h1>



<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p> Miljö.
<p> Har: Latitude E5530, Windows 7 Pro. HW Intel Core i7-3540 M CPU @ 3GHz. 
Minne 16GB RAM (nice!), 128GB SSD samt 3TB USB3 disk.

<p>Använder Chrome (mest), Firefox, Opera, Safari (lite bara)
 och ibland Internet Explorer (inte ofta)
 Dessutom kämpar jag med att lagra filer/bilder etc. på Google drive....raw verkar inte fungera, säger dom..

<p>Använder de rekommenderade verktygen (FileZilla/jEdit)
 (filer: sftp://sftp.student.bth.se). Har Notepad och nyligen Adobe-verktyg.
XAMPP används.
<p>Kursmomentet.
<p> "Beginning PHP and MySQL: From Novice to Professional" riktigt bra kapitel dessa 5 första. Bör läsas i ett svep också.
<p> Guiden riktigt bra! Saknade en sådan här sammanställning i htmlphp-kursen.Även om allt inte sitter
 efter den första genomgången så känns strukturen och uppdelningen 
 riktigt berikande även om jag har lite sedan förra kursen med mig.
 <p>Anax himla bra med en "färdig" struktur då slipper man en del "trial and error" under resans gång. 
 Generellt är det himla bra att ha lite historik. Har tagit mig igenom git och github känns proffsigt!
 <p>Dynamisk meny där blev det lite dimmigt trots att jag pysslade lite med det i förra kursen. 
 Bra med exemplet array av array.
 <p> source.php riktigt berikande så bekvämt jämfört med andra verktyg
 
 <p> Anax blev bwix.
 <p> Me-sidan betydligt enklare denna gång än förra. Lite trickigt med slideshow ha tålamod så börjar det 
 byta bild.
 <p> Håll reda på .JPG och .jpg!
 <p>jEdit + FileZilla == BRA!
{$bwix['paths']}




<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...
www.websequencediagrams.com så nice speciellt napkin

</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


{$bwix['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of BWi.
include(BWI_THEME_PATH);
