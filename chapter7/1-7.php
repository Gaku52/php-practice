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
        $x = 0;

        if ($x >= 0) {
          echo 'プラスだよ';
        } else {
          echo 'マイナスだよ';
        }
        echo '<br/>';
        echo '<br/>';

        if ($x > 0) {
          if ($x % 2 === 0) {
              echo '正の偶数だよ';
            } else {
              echo '正の奇数だよ';
            }
        } else if ($x < 0) {
            if ($x % 2 === 0){
              echo '負の偶数だよ';
            } else  {
              echo '負の奇数だよ';
            }
        } else {
          echo 'ゼロだよ';
        }
    ?>
</body>
</html>