<?php

$builder = new QueryBuilder($connection,"artists");

$artists = $builder->all();

require(dirname(__DIR__, 1)."/views/category.view.php");