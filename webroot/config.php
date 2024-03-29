<?php
/**
 * Config-file for BWi.  Change  settings here to affect installation.
 *
 */



/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Start the session.
 *
 */
 
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__)); 
session_start();
 

 
//session_unset();
//session_destroy(); 
 



/**
 * Define BWi paths.
 *
 */
 //echo "<br> Dir <br>" . __DIR__ . "<br>";
define('BWI_INSTALL_PATH', __DIR__ . '/../');
//echo "BWI install path <br>" . BWI_INSTALL_PATH . "</br>";
define('BWI_THEME_PATH', BWI_INSTALL_PATH . 'theme/render.php');
//echo  "BWI theme path <br>" . BWI_THEME_PATH . "</br>";
	//var_dump(BWI_THEME_PATH);

/**
 * Include bootstrapping functions.
 *
 */
 //echo "+++---+++ " . BWI_INSTALL_PATH;
include(BWI_INSTALL_PATH . '/src/bootstrap.php');
//echo "<br>BWI install path <br>" .  BWI_INSTALL_PATH;
//echo BWI_INSTALL_PATH . '/src/bootstrap.php';

/**
 * Create the BWi variable.
 *
 */
$bwix = array();


/**
 * Site wide settings.
 *
 */
$bwix['lang']         = 'sv';
$bwix['title_append'] = ' | oophp kursmaterial';

$bwix['header'] = <<<EOD
<img class='sitelogo' src='img/oophp.png' alt='oophp Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och Objektorienterad PHP-programmering</span>
EOD;
//dump('header');
$bwix['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos (me@mikaelroos.se) |
 Björn Viklund (erikwi2000@gmail.com)  | 
 <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$bwix['byline'] = <<<EOD
<footer class="byline">
  <figure class="right"><img src="img/me/me.jpg" alt="Börnen">
    <figcaption>En liten Björn.</figcaption>
  </figure>
  <p>Björn läser webbprogrammering vid Blekinge Tekniska Högskola. 
</p>

  <nav>
    <ul class="icons">
      <li><a href='https://plus.google.com/+bjornwiklund_privat/about'><img src='img/glyphicons/png/glyphicons_362_google+_alt.png' alt='google+-icon' title='Björn Viklund på Google+' width='24' height='24'/></a></li>
      <li><a href='http://se.linkedin.com/in/erikwi2000'><img src='img/glyphicons/png/glyphicons_377_linked_in.png' alt='linkedin-icon' title='Björn Viklund på LinkedIn' width='24' height='24'/></a></li>
      <li><a href='https://www.facebook.com/oldman24'><img src='img/glyphicons/png/glyphicons_390_facebook.png' alt='facebook-icon' title='Björn Viklund på Facebook' width='24' height='24'/></a></li>
      <li><a href='https://twitter.com/erikwi2000'><img src='img/glyphicons/png/glyphicons_392_twitter.png' alt='twitter-icon' title='Björn Viklund på Twitter' width='24' height='24'/></a></li>
 <!--     <li><a href='http://mikaelroos.se/youtube'><img src='img/glyphicons/png/glyphicons_382_youtube.png' alt='youtube-icon' title='Björn Viklund på YouTube' width='24' height='24'/></a></li>
      <li><a href='http://mikaelroos.se/flickr'><img src='img/glyphicons/png/glyphicons_395_flickr.png' alt='flickr-icon' title='Björn Viklund på Flickr' width='24' height='24'/></a></li>
  -->
	<li><a href='http://instagram.com/erikwi2000'><img src='img/glyphicons/png/glyphicons_412_instagram.png' alt='instagram-icon' title='Björn Viklund på Instagram' width='24' height='24'/></a></li>
	<li><a href='https://github.com/erikwi2000'><img src='img/glyphicons/png/glyphicons_381_github.png' alt='github-icon' title='Björn Viklund på GitHub' width='24' height='24'/></a></li>
    

		
		</ul>
  </nav>

</footer>
EOD;

//HÄR!
//foreach ($bwix as $xx) { printf($xx) . "<br>";}


/**
 * The navbar
 *
 */
//$bwix['navbar'] = null; // To skip the navbar
/*xxxxxxxxxxxxxxxxxxxxxxxx*/
$bwix['navbar'] = array(

  'class' => 'nb-plain',
//	 'class' => 'navbar',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);
/*xxxxxxxxxxxxxxxxxxxx*/





/**
 * Theme related settings.
 *
 */
//$bwix['stylesheet'] = 'css/style.css';
$bwix['stylesheets'] = array('css/style.css');
$bwix['favicon']    = 'favicon_oophp.ico';



/**
 * Settings for JavaScript.
 *
 */
$bwix['modernizr']  = 'js/modernizr.js';
$bwix['jquery']     = null; // To disable jQuery
$bwix['jquery_src'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
$bwix['javascript_include'] = array();
//$bwix['javascript_include'] = array('js/main.js'); // To add extra javascript files

//echo "At bottom of config";

/**
 * Google analytics.
 *
 */
$bwix['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics