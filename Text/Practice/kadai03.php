<html>
    <head>
        <meta charset = "utf-8">
        <title>結果</title>
    </head>
    <body>
        <?php
            $sum = 0;

            function ave($num){
                global $sum;
                static $cnt = 0;
                $cnt++;

                $sum = $sum + $num;
                $ave = $sum / $cnt;
                return $ave; 
            }

            $num = $_POST["num1"];
            for($i=1;$i<=$num;$i++){
                $ans = ave($i);

            }
            echo "総和は",$sum,"で、平均値は",$ans,"です。<br>";
        ?>
    </body>
</html>