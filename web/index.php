<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__.'/../app/config/dev.php'; // Config for dev
//require __DIR__.'/../app/config/prod.php'; // Config for prod
require __DIR__.'/../app/app.php';
require __DIR__.'/../app/routes.php';

$app->run();
