<?php
    function price($tanka, $kosu){
        $souryo = 250;
        $r_price = $tanka * $kosu + $souryo;

        return $r_price; 
    }        
?>

<html>
    <head>
        <meta charset = "utf-8">
        <title>func</title>
    </head>
    <body>
        <?php
           $tanka = $_POST["mon"];
           $kosu = $_POST["num"];

           $result = price($tanka,$kosu);

           echo "料金は", $result, "円です<br>";
        ?>
    </body>
</html>