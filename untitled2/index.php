<?php
require "vendor/autoload.php";
use core\Router;
use core\request;
require "core/bootstrap.php";

Router::load('app/routes.php')->direct(request::uri(),request::method());
//Router::load('app/routes.php');


//echo "<pre>";
//var_dump(request::uri());
//echo "</pre>";


//require "app/routes.php";
//$rout= new Router();


//var_dump($req->uri());
//var_dump($rout->rout);


//use core\request;
//$req=new request();