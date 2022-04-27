<?php
require_once 'config/config.php';

if( isset($_GET['logout']) ):
	session_destroy();
	header('Location:/');
endif;

if( empty($_SESSION['loggedUser']) ):
	require_once WEBSITE.'login.php';
else:
	$customerInfos = $contents->listCustomerInfo();
	require_once WEBSITE.'upload.php';
endif;