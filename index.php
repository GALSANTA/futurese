<?php 
session_start();

require 'config.php';
require 'Core/Core.php';

$core = new Core();

$core->index();

// echo "foi o index";




