<?php

declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password']);
$databaseManager->connect();

$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->create();
$cards = $cardRepository->get();

require 'overview.php';