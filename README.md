# PHP Money Format

You want to format your money? Let's format with simply way :)

## Installation

Create `composer.json` and add the following

    {
      "require" : {
        "setkyar/moneyformat" : "dev-master"
      }
    }

And run `$ composer install` via your terminal

## Usage

Create new php file and add the following 

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
     
## Todo

- Write Test

## Contributing

1. Fork it ( https://github.com/setkyar/phpmoneyformat )
2. Create your feature branch (`git checkout -b my-new-feature`)
3. Commit your changes (`git commit -am 'Add some feature'`)
4. Push to the branch (`git push origin my-new-feature`)
5. Create a new Pull Request

**Stars to both [Packagist](https://packagist.org/packages/setkyar/moneyformat) and [Here](https://github.com/setkyar/phpmoneyformat) are welcome :smile:**

## License
WTFPL
