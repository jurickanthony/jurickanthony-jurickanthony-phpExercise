<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number1</title>
</head>
<body>
 


<?php

function fileLine ( $fileName,$numLine) {
   $fp = fopen($fileName, 'r');
    $ctr = 0;
    while (!feof($fp)) {
      $ctr++;
      $line = fgets($fp);
      if ($ctr == $numLine){
        return $line;
      }
       
    }
    
  }
  echo "<h1>".fileLine("anthony.txt",3);
  
?>


</body>
</html>