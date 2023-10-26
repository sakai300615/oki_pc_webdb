<?php
  require_once 'dbcon.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>画像の表示</title>
  </head>
  <body>
  <?php 
      try {
        $db = dbcon();
        $stt = $db->prepare('SELECT type,idata FROM photo');
        $stt->execute();

        while($row = $stt->fetch(PDO::FETCH_ASSOC)) {
          $img = base64_encode($row['idata']);

          echo '<img src="data:',$row['type'],';base64,',$img,'"><br>';
        }
      } catch(PDOException $e) {
        die("エラーメッセージ：{$e->getMessage()}");
      }
  ?>
  </body>
</html>



