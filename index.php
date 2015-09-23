<?php

require_once __DIR__ . '/framework/Loader.php';

Loader::register();


$app = new Application();

$app->run();
