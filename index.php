<?php 
ini_set('display errors',1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/Router.php');
$router=new Router();
$router->run();
