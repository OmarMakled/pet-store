<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

namespace App\Infrastructure\Commands;

use App\Application\OrderService;
use App\Infrastructure\RepositoryFactory;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class WeeklyReportCommand extends Command
{
    /**
     * Command name.
     *
     * @var string
     */
    protected static $defaultName = 'app:weekly-report';

    /**
     * Configure command.
     *
     * @return void
     */
    protected function configure()
    {
        $this
            ->setDescription('Get weekly report.')
            ->setHelp('This command allows you to get weekly report.');
    }

    /**
     * Execute.
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $orderService = new OrderService(
            RepositoryFactory::create('Cloud')
        );
        $data = $orderService->weeklyRevenue();
        $output->writeln(json_encode($data));
    }
}
