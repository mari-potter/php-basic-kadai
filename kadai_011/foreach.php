<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $tamanegi_info=['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];

    foreach($tamanegi_info as $index => $info){
      echo"{$index}:{$info}<br>";
    }
    ?>
  </p>
</body>

</html>
