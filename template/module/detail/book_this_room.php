<!DOCTYPE html>
<html>
	<head>
		<title>Book_this_room</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('../../libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('../../less/detail/book_this_room.less', '../../css/detail/book_this_room.css');
        ?>
        <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/js_composer.min.css">
        <link rel="stylesheet" type="text/css" href="../../css/detail/book_this_room.css">
	</head>
	<body>
		<?php include'../page/detail/book_this_room.php'; ?>
	</body>
</html>