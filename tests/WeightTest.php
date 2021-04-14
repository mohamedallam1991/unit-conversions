<?php

namespace Mohamedallam1991\UnitConversions\Tests;

use Mohamedallam1991\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_pounds()
    {
    	$lbs = Weight::fromKilograms(100)->toLbs();
    	$this->assertEquals(220.4623, $lbs);
     }
}
