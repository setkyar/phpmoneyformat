 <?php

 // Display Errors On
ini_set('display_errors', 'On');

$autoload = __DIR__.'/vendor/autoload.php';

if ( ! file_exists($autoload))
{
	exit("Need to run \"composer install\" for example");
}

require $autoload;


use SetKyar\MoneyFormat\MoneyFormat;

$currency = new MoneyFormat;
var_dump($currency->Format(2000, 'Kyats'));

