<?php

//require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';

use App\Wcs\Hello;

$hello = new App\Wcs\Hello();
echo $hello->talk();