<html>
    <head>
        <meta charset = "utf-8">
        <title>結果</title>
    </head>
    <body>
        <?php
                       
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $sum = 0;
            $flg = 0;

            //①と②の交換処理
            if($num2 < $num1){  //$num1が$num2より大きいなら
                $temp = $num1;  //$num1の値を$tempに退避
                $num1 = $num2;  //$num2の値を$num1に代入
                $num2 = $temp;  //退避した$tempの値(元の$num1)を$num2に代入
                $flg = 1;       //入れ替え用の文章表示フラグを1に
            }

            for($i = $num1; $i <= $num2; $i++){
                $sum = $sum + $i;
            }
            
            if($flg == 1){
                echo "※①の値の方が大きかったので①と②を交換して計算しています。<br>";
            }
            echo $num1,"から",$num2,"の総和は",$sum,"です。";
        ?>
    </body>
</html>