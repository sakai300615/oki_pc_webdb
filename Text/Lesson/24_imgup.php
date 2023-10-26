<?php
  require_once 'dbcon.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>画像のアップロード</title>
  </head>
  <body>
  <?php 
      try {
        $db = dbcon();
        $stt = $db->prepare('INSERT INTO photo(type, idata) VALUES(:type, :idata)');
        $file = fopen($_FILES['photo']['tmp_name'], 'rb');
        $stt->bindValue(':type', $_FILES['photo']['type'], PDO::PARAM_STR);
        $stt->bindValue(':idata', $file, PDO::PARAM_LOB);
        $stt->execute();
        echo " 写真のアップロードに成功しました。<br>";
      } catch(PDOException $e) {
        die("エラーメッセージ：{$e->getMessage()}");
      }
  ?>

  </body>
</html>



