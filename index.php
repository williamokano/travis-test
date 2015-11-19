<?php
define("ROOT_DIR", realpath(dirname(__FILE__)));
require_once "vendor/autoload.php";

(new \App\Application())->run();
