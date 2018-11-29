<?php
/**
@author muni
@copyright http:www.smarttutorials.net
 */

require_once 'messages.php';

//site specific configuration declartion
define( 'BASE_PATH', 'http://localhost/sociallogin/index.php');
define( 'DB_HOST', 'localhost' );
define( 'DB_USERNAME', 'root');
define( 'DB_PASSWORD', '');
define( 'DB_NAME', 'fb_login');


//Facebook App Details
define('FB_APP_ID', '482841608779740');
define('FB_APP_SECRET', '350adeb8e038cb0f34ff76e59457f629');
define('FB_REDIRECT_URI', 'http://localhost/sociallogin/login.php');




//Google App Details
define('GOOGLE_APP_NAME', 'Login Google');
define('GOOGLE_OAUTH_CLIENT_ID', '72643637179-oehtb7lr2rtlicokcvejdshd4u4vc967.apps.googleusercontent.com');
define('GOOGLE_OAUTH_CLIENT_SECRET', '3LDNYCHmWacBgtH27QUCVuhF');
define('GOOGLE_OAUTH_REDIRECT_URI', 'http://localhost/sociallogin/login.php');
define("GOOGLE_SITE_NAME", 'Social Login'); 


//Twitter login
//define('TWITTER_CONSUMER_KEY', 'YOUR_CONSUMER_KEY');
//define('TWITTER_CONSUMER_SECRET', 'YOUR_CONSUMER_SECRET');
//define('TWITTER_OAUTH_CALLBACK', 'YOUR_OAUTH_CALLBACK');



function __autoload($class)
{
	$parts = explode('_', $class);
	$path = implode(DIRECTORY_SEPARATOR,$parts);
	require_once $path . '.php';
}
