<?php
define('BASE_PATH', realpath(__DIR__.'/../../'));

require_once __DIR__.'/../../vendor/autoload.php';

//$dotEnv = new \Dotenv\Dotenv(BASE_PATH);
\Dotenv\Dotenv::createUnsafeImmutable(BASE_PATH)->load();
