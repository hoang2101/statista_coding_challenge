<?php

namespace App\MiniGame;

class FizzBuzzPlayer
{
    private FizzBuzzRuleInterface $rule;

    public function __construct(FizzBuzzRuleInterface $rule)
    {
        $this->rule = $rule;
    }

    /**
     * Validate given input and return generator
     * @param $input
     * @return iterable|string
     */
    public function play($input)
    {
        if (!is_numeric($input)) {
            return 'Input is not a valid number';
        }
        if ($input < 1) {
            return 'Number should greater or equal to 1';
        }
        return $this->generateNumbers($input);
    }

    /**
     * Generate a range of number using generator to improve performance
     * @param int $endNumber
     * @return iterable
     */
    private function generateNumbers(int $endNumber): iterable
    {
        for ($i = 1; $i <= $endNumber; $i++) {
            $current = $this->rule->checkNumber($i);
            if (empty($current)) {
                yield $i;
            } else {
                yield $current;
            }
        }
    }
}