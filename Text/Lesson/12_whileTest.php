<html>
    <head>
        <meta charset = "utf-8">
        <title>while</title>
    </head>
    <body>
        <?php
            $rnd = mt_rand(1,15);
            $i = 0;
            
            if($rnd >= 10){
                echo "rndの値は",$rnd,"で一度も繰り返されませんでした";
            }
            while($rnd < 10){
                $i++;
                echo "rndの値は",$rnd,"で繰り返しは",$i,"回目<br>";
                $rnd = mt_rand(1,15);
            }
        ?>
    </body>
</html>