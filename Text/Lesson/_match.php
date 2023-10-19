<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>test</title>
    </head>
    <body>
        <?php
            $num = $_POST["num"];
           
            $numMatch =match ($num) {
             "0"    => "青",
             "1","2"  => "赤",
             default => "白",
            };

            echo $numMatch;

        ?>                      
    </body>
</html>