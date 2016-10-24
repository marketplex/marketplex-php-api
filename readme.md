# Marketplex #

## Description ##
Bibliothèque PHP officielle pour utiliser l'API de Marketplex.fr

## Dépendances ##
- PHP 5.4 ou plus

## Installation ##
Installation avec composer

```
{
    "repositories": [
        {
            "url": "https://github.com/marketplex/marketplex-php-api.git",
            "type": "vcs"
        }
    ],
    "require": {
        "marketplex/api": "dev-master@dev",
    }
}
```

## Configuration ##

```php
// load Composer
require 'vendor/autoload.php';

use Marketplex\Api\Client as MarketplexApi;

$marketplex = new MarketplexApi($appkey, $secretkey);
```

## Utilisation ##
### Récupération des nouvelles commandes ###

```php
$response = $marketplex->getOrdersApi()->findOrdersUpdatedAfter(new \DateTime("-24 hour"));
do {
    foreach($response->results as $order) {
        echo "{$order->marketplace} {$order->marketplaceId}\n";
    }
} while($response = $response->getNextPage());
```