<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
    <?php
    require_once 'dbcon.php';
      try {
        $db = dbcon();
        echo '接続に成功しました。';
      } catch (PDOException $e) {
        die("接続エラー：{$e->getMessage()}");
      } finally {
        $db = null;
      }
        ?>
    </body>
</html>




