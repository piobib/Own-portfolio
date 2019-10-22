<!doctype html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18519161-6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-18519161-6');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $ROOT; ?>/css/style.css" crossorigin="anonymous">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


    <title>Piotr Bibrzycki - portfolio
    </title>

    <?php
    function wdowki($str)
    {
        $new = preg_replace('/ ([a-zA-Z]{1}) /', " $1&nbsp;", $str);
        echo $new;
    }

    ?>    

</head>
<body>