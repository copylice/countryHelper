<?php

namespace app\abstractClasses;

use app\interfaces\CountryInterface;

class AbstractCountry implements CountryInterface
{
    public const ENG_TYPE = 'eng';
    public const ORIG_TYPE = 'orig';
    public string $alpha2;
    public int $code;
    public array $capitals = [
        'eng' => 'englishName',
        'orig' => 'originalName'
    ];
    public array $names = [
        'eng' => 'englishName',
        'orig' => 'originalName'
    ];

    public function supports($alpha2): bool
    {
        return $alpha2 === $this->alpha2;
    }

    public function is(string $alpha2): string
    {
        return $this->supports($alpha2);
    }

    public function value(): int
    {
        return $this->code;
    }

    public function name($type = self::ENG_TYPE): string
    {
        return $this->names[$type] ?? "Типа $type не существует для этой страны";
    }

    public function capital($type = self::ENG_TYPE): string
    {
        return $this->capitals[$type] ?? "Типа $type не существует для этой страны";
    }
}