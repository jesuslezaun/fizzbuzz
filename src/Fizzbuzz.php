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
            print $this->fizzbuzz_generate($number);
        }
    }
    function fizzbuzz_generate(int $number): string
    {
        if($this->fizz($number) and $this->buzz($number))
            return "fizzbuzz";
        else if($this->fizz($number))
            return "fizz";
        else if($this->buzz($number))
            return "buzz";
        else
            return strval($number);
    }
    function fizz(int $number): bool
    {
        return ($this->divisible_by_three($number) or $this->contains_three($number));
    }
    function buzz(int $number): bool
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