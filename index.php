<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>site corporativo php</title>
    </head>
    <body>
        <?php
            require './vendor/autoload.php';

            //die();

            $url = new Core\ConfigController();
            $url->loadPage();
        ?>
    </body>
</html>