<?php

declare(strict_types=1);

namespace MaximBazlov\OtusComposerPackage;

class Calculator
{
    public function sum(int $valueOne, int $valueTwo): int
    {
        return $valueOne + $valueTwo;
    }
}