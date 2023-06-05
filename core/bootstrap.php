<?php
//env setup


require_once realpath(dirname(__DIR__, 1)."/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createUnsafeImmutable(dirname(__DIR__, 1));
$dotenv->load();

//database setup
require(__DIR__."/database/connection.php");
require(__DIR__ . "/database/QueryBuilder.php");
$databaseConnection = require(__DIR__."/config/database.php");

require(__DIR__."/route/Router.php");
require(__DIR__."/Request.php");

//databaseConnection
$connection = DbConnection::make($databaseConnection["connection"][env("DB_CONNECTION")]);


