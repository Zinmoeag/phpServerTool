<?php

require_once realpath("./vendor/autoload.php");

require("./helper.php");
require("./core/bootstrap.php");
Router::load("routes.php")->direct(Request::uri(),Request::reqMethod());
