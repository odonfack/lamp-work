<!DOCTYPE html>
<html>
<head>
	<title>Welcome to DevOps on AWS !!</title>
</head>
<body>
	<?php
	  require 'welcome.php';
	  $welcome = new welcome();
	?>
	<h1><?php echo $welcome->greet() ?></h1>
</body>
</html>
