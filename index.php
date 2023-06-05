<?php

require("./helper.php");
require("./core/bootstrap.php");
require Router::load("routes.php")->direct(Request::uri(),Request::reqMethod());
