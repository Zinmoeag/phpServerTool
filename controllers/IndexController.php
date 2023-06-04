<?php

$builder = new QueryBuilder($connection,"blogs");
$builder->all();
// dd($builder->where("body","%"."delect"."%","like")->get());
// dd($builder->where("id",3)->get());


require(dirname(__DIR__, 1)."/views/index.view.php");