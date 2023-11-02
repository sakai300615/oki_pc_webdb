<?php
  require_once 'dbcon.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>トランザクション</title>
  </head>
  <body>
  <?php 
      try {
        $db = dbcon();      
        $db -> beginTransaction();

        $stt = $db->prepare('INSERT INTO member(nam,gen) VALUES("菊池望","男")');
        $stt->execute();

        $stt = $db->prepare('INSERT INTO member(id,nam) VALUES(1,"野原ひろし")');
        $stt->execute();

        db -> comit();

      } catch(PDOException $e) {
        $db -> rollBack();
        die("エラーメッセージ：{$e->getMessage()}");
      }
  ?>
  </body>
</html>



