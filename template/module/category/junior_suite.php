<!DOCTYPE html>
<html>
	<head>
		<title>Junior_suite</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/category/type_16_junior_suite.less', '../../css/category/type_16_junior_suite.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/category/type_16_junior_suite.css">
	</head>
	<body>
		<?php include'../page/category/junior_suite.php'; ?>
	</body>
</html>