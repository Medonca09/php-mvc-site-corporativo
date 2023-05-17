<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
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