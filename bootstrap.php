<?php
//env setup
require_once realpath(__DIR__."/vendor/autoload.php");
use Dotenv\Dotenv;
$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

require("./helper.php");

//database setup
require("./database/connection.php");
require("./database/builder.php");
$database = require("./config/database.php");

//databaseConnection
$connection = DbConnection::make($database["connection"][env("DB_CONNECTION")]);

