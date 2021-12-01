<?php

use App\Utilities\Asset;

require "bootstrap/init.php";

$obj = new Asset();
var_dump ($obj->js(['app.js']));


?>

