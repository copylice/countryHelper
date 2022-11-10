<?php

namespace app\classes;

use app\abstractClasses\AbstractCountry;
use app\interfaces\CountryInterface;
use Russia;
class CountryHelper
{
    private CountryInterface $country;
    private $supportedCountriesDir = '/supportedСountries/';
    private $supportedCountriesNamespace = 'app\classes\supportedCountries\\';

    public function __construct($alpha2)
    {
        if (!$this->checkSupported($alpha2)){
            throw new \Exception('1234');
        }
    }

    private function checkSupported($alpha2): bool {
        $supportedCountriesClasses = scandir(__DIR__ . $this->supportedCountriesDir);
        foreach ($supportedCountriesClasses as $supportedCountry) {
            if ($supportedCountry !== '.' && $supportedCountry !== '..') {
                $supportedCountry = str_replace('.php', '', $supportedCountry);
                $classname = $this->supportedCountriesNamespace.$supportedCountry;
                /** @var CountryInterface $countryClass **/
                $countryClass = new $classname;
                if ($countryClass->supports($alpha2)) {
                    $this->country = $countryClass;
                    return true;
                }
            }
        }
        return false;
    }

    public function country(): CountryInterface{
        return $this->country;
    }
}