<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function should_add_two_arguments()
    {
        $calculator = new Calculator();

        $result = $calculator->add(1, 2);

        $this->assertEquals(3, $result);
    }

    /**
     * @test
     */
    public function should_multiply_two_arguments()
    {
        $calculator = new Calculator();

        $result = $calculator->multiply(1, 2);

        $this->assertEquals(2, $result);
    }
}
