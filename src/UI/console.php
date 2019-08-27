#!/usr/bin/env php
<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

use App\Application\OrderService;
use App\Infrastructure\RepositoryFactory;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Register The Auto Loader
 */
require __DIR__ . '/../../vendor/autoload.php';

/**
 * Create app command.
 */
class AppCommand extends Command
{
    protected static $defaultName = 'app:weekly-report';

    protected function configure()
    {
        $this
            ->setDescription('Get weekly report.')
            ->setHelp('This command allows you to get weekly report.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $orderService = new OrderService(
            RepositoryFactory::create('Cloud')
        );
        $data = $orderService->weeklyRevenue();
        $output->writeln(json_encode($data));
    }
}

/**
 * Run The Client Application
 */
$application = new Application();
$application->add(new AppCommand());
$application->run();