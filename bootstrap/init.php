<?php

const BASE_PATH = __DIR__ . "/../";

require BASE_PATH . "vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASE_PATH);
$dotenv->load();

require BASE_PATH . "helpers/helpers.php";