<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
        <?php
            $momotaro = $_POST["momotaro"];
            switch($momotaro){
                case 1 :
                    echo "アナタは犬派です<br>";
                    break;
                case 2 : 
                    echo "アナタは猿派です<br>";
                    break;
                case 3 :
                    echo "アナタは雉派です<br>";
                    break;
            }
        ?>
    </body>
</html>