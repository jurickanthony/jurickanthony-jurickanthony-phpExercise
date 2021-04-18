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
    function randomLiner($file){

        if(file_exists($file)){
            
            $myFile = strtolower($file);
    
            $lengthOfTheLetter =  substr_count($myFile, 'a')
                            + substr_count($myFile, 'e')
                            + substr_count($myFile, 'i')
                            + substr_count($myFile, 'o')
                            + substr_count($myFile, 'u');
            
        
            $file = fopen($file,'r');
    
            $line2 = 2;
    
            $line3 = 3;
            
            if($lengthOfTheLetter % 2 == 0){
                
                $ctr = 0;
    
                while(!feof($file)){
    
                    $ctr++;
    
                    $lines = fgets($file);
    
                    if($ctr == $line2){
    
                         return $lines."<br>";
    
                    }
                }
            
            }
            else
            {
                
                $ctr = 0;
                 
                while(!feof($file)){
    
                    $ctr++;
    
                    $lines = fgets($file);
    
                    if($ctr == $line3){
    
                         return $lines;
    
                    }
                }
    
    
            }
    
             
    
    
        } 
        else
        {
            return sprintf('file %s does not exist !',$file);
        }
    }
    echo randomLiner("baybayanon.txt");
    
    ?>
</body>
</html>