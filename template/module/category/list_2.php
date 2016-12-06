<!DOCTYPE html>
<html>
	<head>
		<title>List_2</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/category/list_2.less', '../../css/category/list_2.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/category/list_2.css">
        <script type="text/javascript" src="../../js/jquery-2.2.4.min.js"></script>
        <script type="text/javascript" src="../../js/newjavascript.js"></script>
	</head>
	<body>
		<?php include'../page/category/list_2.php'; ?>
	</body>
</html>