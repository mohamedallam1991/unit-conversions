<?php


namespace Mohamedallam1991\UnitConversions\Tests;

use Mohamedallam1991\UnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function test_it_can_convert_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
