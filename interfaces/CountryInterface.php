<?php

namespace app\interfaces;

interface CountryInterface
{
    public function supports($alpha2): bool;
    public function is(string $alpha2): string;
    public function value(): int;
    public function name($lng): string;
    public function capital(): string;
}