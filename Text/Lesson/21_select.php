<?php
  require_once 'dbcon.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>結果セット</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  </head>
  <body>
    <table class="table">
      <thead>
        <tr>
          <th>ISBNコード</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
        </tr>
      </thead>
      <tbody>
        <?php
          try {
            $db = dbcon();
            $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
            $stt->execute();
            while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
              $msg = <<< "EOD"
                <tr>
                  <td>{$row['isbn']}</td>
                  <td>{$row['title']}</td>
                  <td>{$row['price']}円</td>
                  <td>{$row['publish']}</td>
                  <td>{$row['published']}</td>
                </tr>
              EOD;
              echo $msg;
          }
          } catch(PDOException $e) {
            die("エラーメッセージ：{$e->getMessage()}");
          }
          
        ?>
      </tbody>
    </table>
  </body>
</html>
