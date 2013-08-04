<?php
$config = new stdClass;

$config->env = 'live';

// Analytics
$config->ga = 'UA-31471338-1';

// SEO and namimg
$config->site_name = "Adam Brewer: Curriculum Vitae";
$config->site_desc = "The curriculum vitae of Adam Brewer";
$config->site_keywords = "resume, cv, adamcbrewer cv, adamcbrewer resume, curriculum vitae";
$config->author = "Adam Brewer";
$config->current_url = "http://" . $_SERVER["SERVER_NAME"]. $_SERVER["REQUEST_URI"];

// Directory helpers
$config->site_url = "http://" . $_SERVER['HTTP_HOST'];
$config->assets = $config->site_url . '/assets';



if ( $config->env == 'dev' ) {
	ini_set('error_reporting', E_ALL);
	ini_set('display_errors', 1);
}
