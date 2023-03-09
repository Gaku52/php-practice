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
      $hashira = [
          '水柱' => '富岡義勇',
          '轟柱' => '胡蝶しのぶ',
          '炎柱' => '煉獄杏寿郎',
          '音柱' => '宇髄天元',
          '霧柱' => '時透無一郎',
          '恋柱' => '甘露寺蜜璃',
          '岩柱' => '悲鳴嶼行冥',
          '蛇柱' => '伊黒小芭内',
          '風柱' => '不死川実弥'
      ];
      echo $hashira['岩柱'];
      $hashira['水柱'] = '富岡義勇';
      echo '<br/>';
      echo $hashira['水柱'];
  ?>
</body>
</html>