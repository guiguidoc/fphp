<?php
require_once ('router.php');
require_once ('request.php');
require_once('baseController.php');
require_once('errorController.php');
try{
	Router::route(new Request);
}catch(Exception $e){
	$controller = new errorController;
	$controller->error($e->getMessage());
}