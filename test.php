<?php
include 'classes/CountryHelper.php';
include 'vendor/autoload.php';
use app\classes\CountryHelper;
$countryHelper = new CountryHelper('Rdu');
var_dump($countryHelper->country()->name());