<!DOCTYPE html>
<html>
	<head>
		<title>Detail_2</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/detail/detail-2.less', '../../css/detail/detail-2.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/home/type-34.css">
        <link rel="stylesheet" type="text/css" href="../../css/detail/detail-2.css">
	</head>
	<body>
		<?php include'../page/detail/detail_2.php'; ?>
	</body>
</html>