<?php

session_start(); // Make sure sessions are enabled!

// load in composer's autoloader
require_once __DIR__.'/../vendor/autoload.php';

// get application entry class and benchmark
use Scara\Foundation\Application;
use Scara\Utils\Benchmark;

// run a new benchmark for the application
$bm = new Benchmark();
Benchmark::$marks['scara'] = SCARA_START;

// create new app instance
$app = new Application();
