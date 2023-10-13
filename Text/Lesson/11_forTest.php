<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
        <?php
            $cnt = $_POST["cnt"];
            for($i = 0; $i < $cnt; $i = $i+1){
                echo "現在",$i,"回繰り返しています<br>";
            }
        ?>
    </body>
</html>