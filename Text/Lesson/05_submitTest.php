<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
        <?php
           $sub = $_POST["text"];
           echo "送信された文字は「",$sub,"」です。";
        ?>                      
    </body>
</html>