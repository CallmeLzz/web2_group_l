<!DOCTYPE html>

<html style="background-color: #f3f3f4;">
    <head>
        <title> Web2 - Home </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php
            if (!class_exists('lessc')) {
                include ('libs/lessc.inc.php');
            }
            $less = new lessc;
            /*======================== Mine ========================*/
                $less->compileFile('less/masterpage/type_16_weather.less', 'css/masterpage/type_16_weather.css');
            /*======================== endMine ========================*/

            /*======================== ST ========================*/
                $less->compileFile('less/home/top-nav.less', 'css/home/top-nav.css');
            /*======================== endST ========================*/

            /*======================== T ========================*/
                $less->compileFile('less/masterpage/type_45-footer.less', 'css/masterpage/type_45-footer.css');
            /*======================== endT ========================*/
        ?>

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        
        <!-- ======================== Mine ======================== -->
            <link rel="stylesheet" type="text/css" href="css/weather-icons.min.css">
            <link rel="stylesheet" type="text/css" href="css/js_composer.min.css">
            <link rel="stylesheet" type="text/css" href="css/masterpage/type_16_weather.css">
        <!-- ======================== endMine ======================== -->

        <!-- ======================== ST ======================== -->
            <link rel="stylesheet" type="text/css" href="css/home/top-nav.css">
            <link rel="stylesheet" type="text/css" href="css/home/type-34.css">
            <script type="text/javascript" src="js/script.js"></script>
        <!-- ======================== endST ======================== -->

        <!-- ======================== T ======================== -->
            <link rel="stylesheet" type="text/css" href="css/masterpage/type_45-footer.css">
            <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
            <script type="text/javascript" src="js/newjavascript.js"></script>
        <!-- ======================== T ======================== -->
    </head>

    <body>
        <?php include'page/masterpage/weather.php'; ?>
        <?php include'page/masterpage/top-nav.php'; ?>

        <?php include'page/masterpage/footer.php'; ?>
    </body>
</html>