<?php

require("./bootstrap.php");
$builder = new QueryBulider($connection,"blogs");
require("./view.php");


// dd($builder->where("body","%"."delect"."%","like")->get());
// dd($builder->where("id",3)->get());