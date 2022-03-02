<?php

namespace App\Tests\MiniGame;

use App\MiniGame\FizzBuzzPlayer;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class FizzBuzzPlayerTest extends KernelTestCase
{
    private ?object $player;
    private array $sample;

    public function testInvalidType(): void
    {
        $this->assertSame('Input is not a valid number', $this->player->play('abc'));
    }

    public function testInvalidNumber(): void
    {
        $this->assertSame('Number should greater or equal to 1', $this->player->play(-1));
    }

    public function testOutput(): void
    {
        $generator = $this->player->play(count($this->sample));
        $this->assertSame($this->sample, iterator_to_array($generator));
    }

    protected function setUp(): void
    {
        $this->player = static::getContainer()->get(FizzBuzzPlayer::class);
        $this->sample = [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"];
    }

    protected function tearDown(): void
    {
        $this->player = null;
        $this->sample = [];
    }

}