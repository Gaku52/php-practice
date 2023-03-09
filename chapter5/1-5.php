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
      $土曜日シフト入ってるかどうか = FALSE;
      var_dump(1);
      echo '<br/>';
      $x = true;
      var_dump($x);
      echo '<br/>';
      $y = (string) 10;
      var_dump($y);
      echo '<br/>';
      $x = '10' + '10'; //暗黙の型変換をしてくれる「弱い型付けの言語」
      echo $x;
    ?>
</body>
</html>