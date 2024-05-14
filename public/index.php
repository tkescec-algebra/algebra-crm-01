<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../config/app.php';
require __DIR__ . '/../routes/web.php';

echo $_SERVER['REQUEST_URI'];