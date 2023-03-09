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
      if(TRUE || FALSE) {
        $x = 5 + 3;
        echo $x;
        echo '<br/>';
      }
      echo 'if文の下だよ';
      echo '<br/>';
      //比較の演算でtrueかfalseが出力される
      var_dump(1 <= 2);
      echo '<br/>';
      var_dump(2 >= 1);
      echo '<br/>';
      var_dump(1 <= 1);
      echo '<br/>';
      var_dump(1 == 2);
      echo '<br/>';
      var_dump(1 != 2);
      echo '<br/>';
      var_dump(1 === 'a');
      echo '<br/>';
      var_dump(1 === '1');
  ?>
</body>
</html>