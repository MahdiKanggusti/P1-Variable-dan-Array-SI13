<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array Fungsi Shift dan Unshift</title>
</head>
<body>
  
<?php

// fungsi array_shift($array)
  $tims = ["erwin", "heru", "ali", "zaki"];
  array_shift($tims,);
  foreach($tims as $person) {
      echo $person . '<br/>';
  }
echo '<hr/>';

// fungsi array_unshift($array)
  $tims = ["erwin", "heru", "ali", "zaki"];
  array_unshift($tims, "joko", "wati");
  foreach($tims as $person) {
      echo $person . '<br/>';
  }
?>
</body>
</html>