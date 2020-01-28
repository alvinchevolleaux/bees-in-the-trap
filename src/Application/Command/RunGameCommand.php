<?php

declare(strict_types=1);

namespace BeesInTheTrap\Application\Command;

use BeesInTheTrap\Domain\GameFactory;
use Laminas\Text\Figlet\Figlet;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

class RunGameCommand extends Command
{
    private Figlet $figlet;

    protected static $defaultName = "game:new";

    public function __construct(Figlet $figlet, string $name = null)
    {
        parent::__construct($name);
        $this->figlet = $figlet;
    }

    protected function configure()
    {
        $this->addOption("auto", null, InputOption::VALUE_NONE, "Add to autorun the game");
    }


    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln($this->figlet->render("Bees in the Trap"));

        $game = GameFactory::createGame();

        $helper = $this->getHelper('question');
        $question = new Question('Type hit to take your next turn: ', false);

        $i = 0;
        do {

            if (!$input->getOption('auto')) {
                do {
                    $answer = $helper->ask($input, $output, $question);
                } while ($answer !== "hit");
            }

            $result = $game->takeTurn();
            $output->writeln($result);
            $i++;
        } while (!$game->gameOver());

        $output->writeln(sprintf("Well done, you have destroyed the hive in %d hits", $i));

        return 0;
    }
}