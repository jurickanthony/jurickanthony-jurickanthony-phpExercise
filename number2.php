<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


function appendLine($fileName,$insertData,$lineNum)  {
  $fp = fopen($fileName, "a+") or die("Unable to open fileName!");
  $ctr = 0;
  while (!feof($fp)) {
    $ctr++;
    $line = fgets($fp);
    if ($ctr == $lineNum){
      fwrite($fp, $insertData);
      return $line.$insertData;
    }
  }

}
echo appendLine("jurick.txt","jurick",1);


?>
</body>
</html>