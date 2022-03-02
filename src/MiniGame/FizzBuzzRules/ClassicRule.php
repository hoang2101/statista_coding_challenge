<?php

namespace App\MiniGame\FizzBuzzRules;

use App\MiniGame\FizzBuzzRuleInterface;

class ClassicRule implements FizzBuzzRuleInterface
{
    /**
     * Return the string base on the remainder of the number. String can be combined if the number satisfies multi rules
     * @param int $number
     * @return string
     */
    public function checkNumber(int $number): string
    {
        $replaceString = '';
        if (!($number % 3)) {
            $replaceString .= 'Fizz';
        }
        if (!($number % 5)) {
            $replaceString .= 'Buzz';
        }
        return $replaceString;
    }
}