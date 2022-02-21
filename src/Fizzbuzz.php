<?php

declare(strict_types=1);

namespace Deg540\PHPTestingBoilerplate;

class Fizzbuzz
{
    function fizzbuzz_loop(): void
    {
        $limit = 100;
        
        for($number= 0; $number < $limit; $number++)
        {
            print $this->generate($number);
        }
    }

    function generate(int $number): string
    {
        if($this->isFizz($number) and $this->isBuzz($number))
            return "fizzbuzz";
        else if($this->isFizz($number))
            return "fizz";
        else if($this->isBuzz($number))
            return "buzz";
        else
            return strval($number);
    }

    function isFizz(int $number): bool
    {
        return ($this->divisible_by_three($number) or $this->contains_three($number));
    }

    function isBuzz(int $number): bool
    {
        return ($this->divisible_by_five($number) or $this->contains_five($number));
    }

    function contains_three(int $number): bool
    {
        $number_string = strval($number);
        return str_contains($number_string, "3");
    }

    function contains_five(int $number): bool
    {
        $number_string = strval($number);
        return str_contains($number_string, "5");
    }

    function divisible_by_three(int $number): bool
    {
        return ($number % 3 == 0);
    }
    
    function divisible_by_five(int $number): bool
    {
        return ($number % 5 == 0);
    }
}