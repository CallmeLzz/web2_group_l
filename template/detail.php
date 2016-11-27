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
            $less->compileFile('less/home/type_16-home.less', 'css/home/type_16-home.css');
        ?>

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/weather-icons.min.css">
        <link rel="stylesheet" type="text/css" href="css/js_composer.min.css">

        <link rel="stylesheet" type="text/css" href="css/home/type_16-home.css">
    </head>

    <body>
        <?php include'page/masterpage/weather.php'; ?>
    </body>
</html>