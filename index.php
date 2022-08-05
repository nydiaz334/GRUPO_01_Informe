<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<script src="./script/validar.js"></script>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
		<div class="container">
			<?php
				include_once("include/class.figura.php");
				include_once("include/Interface.formulas.php");
				include_once("figuras/class.cuadrado.php");
				include_once("figuras/class.rectangulo.php");
				include_once("figuras/class.triangulo.php");
				echo figura::get_form();
				
			?>
        </div>
		
	
	
</body>

</html>
