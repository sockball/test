<?php
require_once __DIR__ . '/../vendor/autoload.php';
use sockball\test\Test;

$instance = new Test();
$instance->say('hello world');