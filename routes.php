<?php

	$Router->get("","./controllers/IndexController.php");

	$Router->get("artist","./controllers/ArtistController.php");

	$Router->get("category","./controllers/CategoryController.php");
	
	$Router->get("form","./controllers/FormController.php");

	$Router->post("form","./controllers/FormController.php");
