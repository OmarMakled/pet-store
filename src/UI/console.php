#!/usr/bin/env php
<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

use App\Infrastructure\Commands\WeeklyReportCommand;
use Symfony\Component\Console\Application;

/**
 * Register The Auto Loader
 */
require __DIR__ . '/../../vendor/autoload.php';

/**
 * Run The Client Application
 */
$application = new Application();
$application->add(new WeeklyReportCommand());
$application->run();