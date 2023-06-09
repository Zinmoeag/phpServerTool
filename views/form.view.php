<?php require "partial/header.view.php"; ?>

	<h3>Form</h3>
	<form action="/formadd" method="POST">
		<input type="text" name="name" placeholder="name">
		<input type="text" name="slug" placeholder="slug">
		<button type="submit">Submit</button>
	</form>

<?php require "partial/footer.view.php"; ?>