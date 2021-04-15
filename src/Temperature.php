<?php

namespace Mohamedallam1991\UnitConversions;

class Temperature
{
    private float $celsius;

    public static function forCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    //kg to lb
    // kg X 220.4623
    // 2.204623
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
