<!DOCTYPE html>
<html>
	<head>
		<title>Content 0</title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/home/type_16_content_0.less', '../../css/home/type_16_content_0.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/home/type_16_content_0.css">
	</head>
	<body>
		<?php include'../page/home/content_0.php'; ?>
	</body>
</html>