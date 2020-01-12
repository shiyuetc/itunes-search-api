<?php
require "src/iTunesSearchAPI.php";

$res = iTunesSearchAPI::search('jack johnson', ['country' => 'JP']);
var_dump($res);

$res = iTunesSearchAPI::lookup(['id' => 909253], ['country' => 'JP']);
var_dump($res);
