<html>
    <head>
        <meta charset = "utf-8">
        <title>func</title>
    </head>
    <body>
        <?php
            $tax = 0.1;
            
            function taxPrice($tanka, $kosu){
                global $tax;
                $ryoukin = $tanka * $kosu * (1+$tax);
                echo $ryoukin,"円です<br>";
            }
            taxPrice(250, 4);
        ?>
    </body>
</html>