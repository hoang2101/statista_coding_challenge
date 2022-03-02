<?php

namespace App\MiniGame;

interface FizzBuzzRuleInterface
{
    /**
     * @param int $number
     * @return string
     */
    public function checkNumber(int $number): string;
}