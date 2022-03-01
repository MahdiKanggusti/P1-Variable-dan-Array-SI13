<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Fungsi Pop</title>
</head>
<body>
  
<?php

// fungsi array_pop($array)
  $tims = ["erwin", "heru", "ali", "zaki"];
  array_pop($tims);
  foreach($tims as $person) {
      echo $person . '<br/>';
  }
?>
</body>
</html>