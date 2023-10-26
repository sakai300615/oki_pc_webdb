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
          $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES(:isbn, :title, :price, :publish, :published)');
          $stt->bindValue(':isbn', $_POST['isbn']);
          $stt->bindValue(':title', $_POST['title']);
          $stt->bindValue(':price', $_POST['price']);
          $stt->bindValue(':publish', $_POST['publish']);
          $stt->bindValue(':published', $_POST['published']);
          $stt->execute();
          header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/19_insert_form.html');
        } catch(PDOException $e) {
          die("エラーメッセージ：{$e->getMessage()}");
        }finally {
          $db = null;
        }
    ?>
    </body>
</html>