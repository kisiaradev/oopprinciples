<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animal Kingdom</title>

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Mr+Dafoe|Open+Sans|Roboto" rel="stylesheet">

    <!-- Cutsom Presets -->
	<link rel="stylesheet" href="./assets/styles/site.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<?php 

			require_once './libs/classes/autoload.php';
			
			$hyena = new DogFamily();
			
		?>
	</div>
</div>
</body>
</html>

