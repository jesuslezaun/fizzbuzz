<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\Fizzbuzz;
use PHPUnit\Framework\TestCase;

final class FizzbuzzTest extends TestCase
{
    /**
     * @test
     */
    public function test_fizzbuzz_generate()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_fizzbuzz = 15;
        $number_fizz = 3;
        $number_buzz = 5;
        $number_no_fizzbuzz = 7;

        //Act
        $returned_fizzbuzz = $fizzbuzz->fizzbuzz_generate($number_fizzbuzz);
        $returned_fizz = $fizzbuzz->fizzbuzz_generate($number_fizz);
        $returned_buzz = $fizzbuzz->fizzbuzz_generate($number_buzz);
        $returned_no_fizzbuzz = $fizzbuzz->fizzbuzz_generate($number_no_fizzbuzz);

        //Assert
        self::assertEquals("fizzbuzz", $returned_fizzbuzz);
        self::assertEquals("fizz", $returned_fizz);
        self::assertEquals("buzz", $returned_buzz);
        self::assertEquals(strval($number_no_fizzbuzz), $returned_no_fizzbuzz);

    }

    /**
     * @test
     */
    public function test_fizz()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_contains_three = 23;
        $number_divisible_by_three = 15;
        $number_contains_three_and_divisible_by_three = 30;
        $number_not_contains_three_not_divisible_by_three = 19;

        //Act
        $contains_three = $fizzbuzz->fizz($number_contains_three);
        $divisible_by_three = $fizzbuzz->fizz($number_divisible_by_three);
        $contains_three_and_divisible_by_three = $fizzbuzz->fizz($number_contains_three_and_divisible_by_three);
        $not_contains_three_not_divisible_by_three = $fizzbuzz->fizz($number_not_contains_three_not_divisible_by_three);

        //Assert
        self::assertTrue($contains_three);
        self::assertTrue($divisible_by_three);
        self::assertTrue($contains_three_and_divisible_by_three);
        self::assertFalse($not_contains_three_not_divisible_by_three);
    }

    /**
     * @test
     */
    public function test_buzz()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_contains_five = 52;
        $number_divisible_by_five = 20;
        $number_contains_five_and_divisible_by_five = 55;
        $number_not_contains_five_not_divisible_by_five = 23;

        //Act
        $contains_five = $fizzbuzz->buzz($number_contains_five);
        $divisible_by_five = $fizzbuzz->buzz($number_divisible_by_five);
        $contains_five_and_divisible_by_five = $fizzbuzz->buzz($number_contains_five_and_divisible_by_five);
        $not_contains_five_not_divisible_by_five = $fizzbuzz->buzz($number_not_contains_five_not_divisible_by_five);

        //Assert
        self::assertTrue($contains_five);
        self::assertTrue($divisible_by_five);
        self::assertTrue($contains_five_and_divisible_by_five);
        self::assertFalse($not_contains_five_not_divisible_by_five);
    }

    /**
     * @test
     */
    public function test_contains_three()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_contains_three = 23;
        $number_not_contains_three = 26;

        //Act
        $contains_three = $fizzbuzz->contains_three($number_contains_three);
        $not_contains_three = $fizzbuzz->contains_three($number_not_contains_three);

        //Assert
        self::assertTrue($contains_three);
        self::assertFalse($not_contains_three);
    }

    /**
     * @test
     */
    public function test_contains_five()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_contains_five = 52;
        $number_not_contains_five = 17;

        //Act
        $contains_five = $fizzbuzz->contains_five($number_contains_five);
        $not_contains_five = $fizzbuzz->contains_five($number_not_contains_five);

        //Assert
        self::assertTrue($contains_five);
        self::assertFalse($not_contains_five);
    }

    /**
     * @test
     */
    public function test_divisible_by_three()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_divisible_by_three = 6;
        $number_not_divisible_by_three = 13;

        //Act
        $divisible_by_three = $fizzbuzz->divisible_by_three($number_divisible_by_three);
        $not_divisible_by_three = $fizzbuzz->divisible_by_three($number_not_divisible_by_three);

        //Assert
        self::assertTrue($divisible_by_three);
        self::assertFalse($not_divisible_by_three);
    }

    /**
     * @test
     */
    public function test_divisible_by_five()
    {
        //Arrange
        $fizzbuzz = new Fizzbuzz();
        $number_divisible_by_five = 10;
        $number_not_divisible_by_five = 17;

        //Act
        $divisible_by_five = $fizzbuzz->divisible_by_five($number_divisible_by_five);
        $not_divisible_by_five = $fizzbuzz->divisible_by_five($number_not_divisible_by_five);

        //Assert
        self::assertTrue($divisible_by_five);
        self::assertFalse($not_divisible_by_five);
    }
}
