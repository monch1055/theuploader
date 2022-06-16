<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
error_reporting(E_ERROR);

session_set_cookie_params(3600,"/");
session_start();

define('ROOT', getcwd());
define('CLASSES_FOLDER', ROOT.'/class/');
define('WEBSITE',ROOT.'/layout/');

require_once CLASSES_FOLDER.'myDBClass.php';
require_once CLASSES_FOLDER.'contentsClass.php';

$mysqli = new dbClass(); /* Base DB Class */
$contents = new contents(); /* Base Contents Class */
