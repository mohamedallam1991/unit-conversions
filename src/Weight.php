<?php

namespace Mohamedallam1991\UnitConversions;

class Weight
{
    private float $kilograms;

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    //kg to lb
    // kg X 220.4623
    // 2.204623
    public function toLbs()
    {
        return $this->kilograms * 2.204623;
    }
}
