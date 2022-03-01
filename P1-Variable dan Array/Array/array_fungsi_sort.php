<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Fungsi Sort</title>
</head>
<body>
  
  <?php
  $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jamabu" ];
  echo '<ol>';
  foreach($ar_buah as $k => $v) {
    echo '<li>' . $k . ' - ' . $v . '</li>';
  }

// fungsi sort untuk menambah dan menyusun nomor data dari yang terkecil/pertama
  echo '</ol>';
  sort($ar_buah);
  echo '<hr/>'; 
  echo '<ol>';
  foreach($ar_buah as $k =>$v) {
      echo '<li>' .$k. ' - ' . $v . '</li>';
  }
  echo '</ol>';
  
// fungsi arsort untuk menambah dan menyusun nomor data dari yang terbesar/belakang/terakhir
  echo '</ol>';
  arsort($ar_buah);
  echo '<hr/>'; 
  echo '<ol>';
  foreach($ar_buah as $k =>$v) {
      echo '<li>' .$k. ' - ' . $v . '</li>';
  }
  echo '</ol>';

?>
</body>
</html>