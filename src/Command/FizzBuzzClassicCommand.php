<?php

namespace App\Command;

use App\MiniGame\FizzBuzzPlayer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FizzBuzzClassicCommand extends Command
{
    protected static $defaultName = 'fizz-buzz:classic';
    protected static $defaultDescription = 'Prints the numbers from 1 to 100. But for multiples of three print Fizz instead of the number and for the multiples of five print Buzz. For numbers which are multiples of both three and five print FizzBuzz.';
    private FizzBuzzPlayer $player;

    public function __construct(FizzBuzzPlayer $fizzBuzzGame)
    {
        $this->player = $fizzBuzzGame;
        parent::__construct();
    }

    protected function configure(): void
    {
        $this->addOption('endNumber',
            null,
            InputOption::VALUE_OPTIONAL,
            'Number to be counted',
            100
        );
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $output->writeln($this->player->play($input->getOption('endNumber')));
        return Command::SUCCESS;
    }
}