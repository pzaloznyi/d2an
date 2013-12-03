<?php

namespace Dota2\HeroBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FetchHeroesCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('dota2:heroes:fetch')
            ->setDescription('Fetch heroes from http://www.dota2.com')
            ->addArgument('name', InputArgument::OPTIONAL, 'Choose dota2 hero name');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        $output->writeln('Hello ' . $name . '!');
    }
} 