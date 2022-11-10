<?php

namespace app\classes\supportedCountries;

use app\abstractClasses\AbstractCountry;

class Russia extends AbstractCountry
{
    public const ENG_TYPE = 'eng';
    public const ORIG_TYPE = 'orig';
    public string $alpha2 = 'Ru';
    public int $code = 123;
    public array $capitals = [
        'eng' => 'Moscow',
        'orig' => 'Москва'
    ];
    public array $names = [
        'eng' => 'Russia',
        'orig' => 'Россия'
    ];
}