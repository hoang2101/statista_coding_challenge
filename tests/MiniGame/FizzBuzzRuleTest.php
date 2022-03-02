<?php

namespace App\Tests\MiniGame;

use App\MiniGame\FizzBuzzRules\ClassicRule;
use PHPUnit\Framework\TestCase;

class FizzBuzzRuleTest extends TestCase
{
    public function testClassicRule(): void
    {
        $rule = new ClassicRule();
        $this->assertSame('', $rule->checkNumber(-1));
        $this->assertSame('FizzBuzz', $rule->checkNumber(0));
        $this->assertSame('', $rule->checkNumber(1));
        $this->assertSame('Fizz', $rule->checkNumber(3));
        $this->assertSame('Buzz', $rule->checkNumber(5));
        $this->assertSame('FizzBuzz', $rule->checkNumber(15));
        $this->assertSame('', $rule->checkNumber(16));
    }
}