<?php

require_once __DIR__.'/../vendor/autoload.php';

if (file_exists(__DIR__.'/.env')) {
    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();
}

\VCR\VCR::configure()->setMode('once');

\VCR\VCR::turnOn();
