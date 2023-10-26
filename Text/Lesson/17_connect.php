<html>
    <head>
        <meta charset = "utf-8">
        <title>送信結果</title>
    </head>
    <body>
    <?php
      $dsn = 'mysql:dbname=phptest; host=127.0.0.1; charset=utf8';
      $username = 'root';
      $password = '';

      try {
        $db = new PDO($dsn, $username, $password);
        echo '接続に成功しました。';
      } catch (PDOException $e) {
        die("接続エラー：{$e->getMessage()}");
      } finally {
        $db = null;
      }
        ?>
    </body>
</html>




