<?php
require 'environment.php';


$config = array();

if (ENVIRONMENT == "development") {
	define("BASE_URL", "http://cadastropankararu.com/");
	
}
else{
	define("BASE_URL", "http://futurese.aldeiabrejinhodaserra.com.br/");
	

}
