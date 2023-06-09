<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>testing</title>
</head>
<style type="text/css">
	body{
		margin: 0; padding: 0;
		background: #cbe6ff;
	}
	nav{
		background: black; color: white;
		height: 80px;
	}
	nav div{
		height: 100%;
		display: flex;
		align-items: center; justify-content: center;
		gap:30px;
	}
	nav div a{
		text-decoration: none;
		color: white; 
		font-size: 1.2rem;
	}
</style>
<body>
	<?php require "views/components/nav.view.php" ?>