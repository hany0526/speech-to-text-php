<?php
require 'vendor/autoload.php';

$config = new Refinery29\CS\Config\Php56();
$config->getFinder()->in(__DIR__);

$cacheDir = getenv('TRAVIS') ? getenv('HOME') . '/.php-cs-fixer' : __DIR__;

$config->setCacheFile($cacheDir . '/.php_cs.cache');


return $config;