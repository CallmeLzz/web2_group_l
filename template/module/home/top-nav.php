<!DOCTYPE html>
<html>
	<head>
		<title>Top-nav</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/home/top-nav.less', '../../css/home/top-nav.css');
            $less->compileFile('../../less/home/type-34.less', '../../css/home/type-34.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/home/top-nav.css">
        <link rel="stylesheet" type="text/css" href="../../css/home/type-34.css">
        <script type="text/javascript" src="../../js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../../js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="../../js/demo-slideshow-2.0.js"></script>
	</head>
	<body>
		<?php include'../page/masterpage/top-nav.php'; ?>
	</body>
</html>