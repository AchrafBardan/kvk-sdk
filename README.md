# Kvk sdk
Search the kvk database for free.

### Installation
Run the following command to install the kvk sdk:
```
composer require achrafbardan/kvk-sdk
```

### Usage
```php
...
use AchrafBardan\KvkSdk\Client;
...
$client = new Client();

$client->search('76274160');
```
Returns:
```json
{
    "resultatenHR": [
        {
            "handelsnaam": "Bardan",
            "handelsnamen": "Bardan",
            "dossiernummer": "76274160",
            "subdossiernummer": "0000",
            "vestigingsnummer": "000044093411",
            "straat": "Asterstraat",
            "huisnummer": "7",
            "huisnummertoevoeging": "",
            "postcode": "5701WC",
            "plaats": "Helmond",
            "type": "Hoofdvestiging",
            "vestiging": 1,
            "hoofdvestiging": 1,
            "rechtsvormcode": "01",
            "rechtsvormbeschrijving": "Eenmanszaak",
            "commercieel": 1,
            "hoofdactiviteitcode": "47912",
            "nevenactiviteiten": [
                "47911",
                "6209"
            ]
        }
    ]
}
```