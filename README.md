# PHP Money Format

You want to format your money? Let's format with simply way :)

### Usage

     <?php
    
     // Display Errors On
     ini_set('display_errors', 'On');
    
     $autoload = __DIR__.'/vendor/autoload.php';
    
     if ( ! file_exists($autoload))
     {
     	exit("Need to run \"composer install\"!");
     }
    
     require $autoload;
        
     use SetKyar\MoneyFormat\MoneyFormat;
     $currency = new MoneyFormat;
    
     var_dump($currency->Format(2000, 'Kyats')); //string(11) "Kyats 2,000"

	var_dump($currency->Format(2000, 'USD')); //string(11) "USD 2,000"
     


