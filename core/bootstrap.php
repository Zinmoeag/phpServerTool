<?php
//env setup

use Dotenv\Dotenv;

App::bind("Dotenv", Dotenv::createUnsafeImmutable(dirname(__DIR__, 1)));
App::get("Dotenv")->load();

//databaseConnection
App::bind("config",require(__DIR__."/config/database.php"));
App::bind("database",DbConnection::make(App::get("config")["connection"][env("DB_CONNECTION")]));