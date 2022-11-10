<?php
declare(strict_types=1);

namespace app\classes;

use app\classes\exceptions\UnknownCountryException;
use app\interfaces\CountryInterface;
use Russia;

class CountryHelper
{
    private CountryInterface $country;
    private $supportedCountriesDir = '/supportedСountries/';
    private $supportedCountriesNamespace = 'app\classes\supportedCountries\\';

    public function __construct($alpha2)
    {
        if (!$this->checkSupported($alpha2)) {
            throw new UnknownCountryException();
        }
    }

    /**
     * @param string $alpha2
     * @return bool
     */
    private function checkSupported(string $alpha2): bool
    {
        /** @var array $supportedCountriesClasses - список классов стран * */
        $supportedCountriesClasses = scandir(__DIR__ . $this->supportedCountriesDir);
        foreach ($supportedCountriesClasses as $supportedCountry) {
            /** Отделяем раздилители пути **/
            if ($supportedCountry !== '.' && $supportedCountry !== '..') {
                /** Удаляем расширение, для использовании имени класса в namespace **/
                $supportedCountry = str_replace('.php', '', $supportedCountry);
                $classname = $this->supportedCountriesNamespace . $supportedCountry;
                /** @var CountryInterface $countryClass * */
                $countryClass = new $classname;
                if ($countryClass->supports($alpha2)) {
                    $this->country = $countryClass;
                    return true;
                }
            }
        }
        return false;
    }

    public function country(): CountryInterface
    {
        return $this->country;
    }
}