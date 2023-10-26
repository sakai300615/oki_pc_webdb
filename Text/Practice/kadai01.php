<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
        <?php
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $ope = $_POST["ope"];
            $ans = 0;
            $flg0 = 0;

            switch($ope){
                case 1 :
                    $ans = $num1 + $num2;
                    $ope = "+";
                    break;
                case 2 : 
                    $ans = $num1 - $num2;
                    $ope = "-";
                    break;
                case 3 :
                    $ans = $num1 * $num2;
                    $ope = "×";
                    break;
                case 4 :
                    if($num2 == 0){
                        echo "0で割ることはできません！！";
                        $flg0 = 1;
                        break;
                    }
                    $ans = $num1 / $num2;
                    $ope = "÷";
                    break;

                default : echo "数値以外が入力されています。";
            }
            if($flg0 === 0){
              echo $num1,$ope,$num2,"の結果は",$ans,"です。";
            }
        ?>
    </body>
</html>