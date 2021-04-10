<?php

require '../vendor/autoload.php';
//require '../src/Wcs/Hello.php';

//Answer to Challenge PHP5.1
/**use App\Wcs\Hello;

$hello = new Hello();
echo $hello->talk();*/

use HelloWorld\SayHello;

$sayHello = new SayHello();
echo $sayHello->world();