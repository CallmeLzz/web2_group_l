<!DOCTYPE html>
<html>
	<head>
		<title>Weather</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/masterpage/type_16_weather.less', '../../css/masterpage/type_16_weather.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/weather-icons.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/masterpage/type_16_weather.css">
	</head>
	<body>
		<?php include'../page/masterpage/weather.php'; ?>
	</body>
</html>