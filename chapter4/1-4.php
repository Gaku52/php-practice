<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <?php
      echo '文字列';
      echo '<br/>';
      echo 3 + 5;
      echo '<br/>';
      $x = 'こんにちは'.'チャンネル登録してね';
      $y = '最'.'&'.'高';
      echo $x;
      echo '<br/>';
      echo $y;
      echo '<br/>';
      $a = 0.1 + 0.2 - 0.5;
      echo $a;
      echo '<br/>';
      echo 100 - 99.6;
      echo '<br/>';
      $t = TRUE;
      $f = FALSE;
      $h = TRUE && FALSE; //
      $i = TRUE or FALSE; //
    ?>
</body>
</html>