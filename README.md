# iTunesSearchAPI
iTunes Search API library for PHP.
[Official Document](https://affiliate.itunes.apple.com/resources/documentation/itunes-store-web-service-search-api/)

## Search API Method Example
```
<?php
$res = iTunesSearchAPI::search('jack johnson', ['country' => 'JP']);
var_dump($res);
?>
```
## Lookup API Method Example
```
<?php
$res = iTunesSearchAPI::lookup(['id' => 909253], ['country' => 'JP']);
var_dump($res);
?>
```