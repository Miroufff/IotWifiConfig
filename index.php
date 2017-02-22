<?php
/**
 * Created by PhpStorm.
 * User: mirouf
 * Date: 22/02/17
 * Time: 16:23
 */
    require 'functions.php';
    $message = post();
?>

<html>
    <head>
        <meta charset="UTF8">
        <title>Home</title>
    </head>
    <body style="background-color: lightgray">
        <?php
            echo displayIndex();
            echo $message
        ?>
    </body>
</html>

