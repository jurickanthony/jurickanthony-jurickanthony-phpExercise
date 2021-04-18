<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reverseHalf String</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row  " >
<div class="card mt-5">
<div class="card-header bg-light"><h3>reverse Me</h3></div>
<div class="card-body ">
<form  method="post">
    <div class="form-group">
    
    <br>
    <h5>Enter a String: </h5>
    <input type="text" name="text"  class="form-control ">
    </div>
    <input type="submit" name='submit' class="btn btn-primary">
    
</form>
<br>
    <?php
    
      if(isset($_POST['submit'])== "Submit") {
        $input = $_POST['text'];
       

        function reverseHalf($input){
            $len = strlen($input);
            if($len%2!=0){
              return strrev($input);
            }
            else{
              $halfme = strrev($input); 
             return (substr($halfme, 0, $len / 2));     
                
            }

            
            
        }
          
        
        
         echo reverseHalf($input);
       

        }
        
    
    

     ?>
        
    
    

     </div>
    </div>
    </div>
    </div>
</body>
</html>