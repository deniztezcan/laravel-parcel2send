# Laravel Parcel2Send API
[![Latest Stable Version](https://poser.pugx.org/deniztezcan/laravel-parcel2send/v/stable)](https://packagist.org/packages/deniztezcan/laravel-parcel2send) 
[![Total Downloads](https://poser.pugx.org/deniztezcan/laravel-parcel2send/downloads)](https://packagist.org/packages/deniztezcan/laravel-parcel2send) 
[![Latest Unstable Version](https://poser.pugx.org/deniztezcan/laravel-parcel2send/v/unstable)](https://packagist.org/packages/deniztezcan/laravel-parcel2send) 
[![License](https://poser.pugx.org/deniztezcan/laravel-parcel2send/license)](https://packagist.org/packages/deniztezcan/laravel-parcel2send)
[![Maintainability](https://api.codeclimate.com/v1/badges/9057b79855fcc029f989/maintainability)](https://codeclimate.com/github/deniztezcan/laravel-parcel2send/maintainability)

A Laravel package for the Parcel2Send API.

## Instalation
```
composer require deniztezcan/laravel-parcel2send
```

Add a ServiceProvider to your providers array in `config/app.php`:
```php
    'providers' => [
    	//other things here

    	DenizTezcan\Parcel2Send\Parcel2SendServiceProvider::class,
    ];
```

Add the facade to the facades array:
```php
    'aliases' => [
    	//other things here

    	'Parcel2Send' => DenizTezcan\Parcel2Send\Facades\Parcel2Send::class,
    ];
```

Finally, publish the configuration files:
```
php artisan vendor:publish --provider="DenizTezcan\Parcel2Send\Parcel2SendServiceProvider"
```

### Configuration
Please set your API: `P2S_PUBLICKEY` and `P2S_SECRETKEY` in the `.env`
