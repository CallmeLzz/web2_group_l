<!DOCTYPE html>
<html>
	<head>
		<title>Reservation</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/home/type_16_reservation.less', '../../css/home/type_16_reservation.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/weather-icons.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/home/type_16_reservation.css">
	</head>
	<body>
		<?php include'../page/home/reservation.php'; ?>
	</body>
</html>