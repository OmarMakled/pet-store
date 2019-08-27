<?php

/**
 * This file is part of pet store ddd app.
 *
 * @author Omar Makled <omar.makled@gmail.com>
 */

use App\Application\OrderService;
use App\Infrastructure\RepositoryFactory;

/**
 * Register The Auto Loader
 */
require_once '../vendor/autoload.php';

/**
 * Set header
 */
header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');

/**
 * Run The Client Application
 */

$orderService = new OrderService(
    RepositoryFactory::create('Cloud')
);

$data = $orderService->weeklyRevenue();

echo json_encode($data);
