<!DOCTYPE html>
<html>
	<head>
		<title>Cate_0</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/category/type_16_cate_0.less', '../../css/category/type_16_cate_0.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/category/type_16_cate_0.css">
	</head>
	<body>
		<?php include'../page/category/cate_0.php'; ?>
	</body>	
</html>