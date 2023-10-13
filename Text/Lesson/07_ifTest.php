<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
        <?php
           $point = $_POST["point"];
           if($point === 60){
                echo "合格です!";
           }
           else{
            echo "不合格です!!";
           }
        ?>
    </body>
</html>