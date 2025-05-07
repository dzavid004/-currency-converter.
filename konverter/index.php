<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Конверетер</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/konv.css"/>
  </head>
<body>
	
	<div id="wrap" class="container col-9">
		
		
		<?php
			include 'convert.php';
		?>
		
		<h1 class="display-6 lead">  <?=konverter($anyaIsTheBest, $value1, $value2);?></h1>
		<br/>
		<h1 class="display-3 font-max text-light"  >
			КОНВЕРТЕР ВАЛЮТ
		</h1>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>

	



