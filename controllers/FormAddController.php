<?php

$artist = new QueryBuilder($connection,"artists");


// dd($artist->all());
$artist->insert([
	"artist_name" => "zin zin",
	"slug" => "zin_ain",
]);


header('Location: /');