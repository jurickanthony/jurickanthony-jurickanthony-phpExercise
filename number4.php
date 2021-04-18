<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testLoyalty String</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row justify-content-center " >
<div class="card mt-5">
<div class="card-header bg-light"><h3>Test me If im Loyal</h3></div>
<div class="card-body bg-black">
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
       $inputName = $_POST['text'];
       function testLoyalty($inputName){    
        $lengthOfString = strlen($inputName);
        $E = substr_count($inputName,"E");
        $A = substr_count($inputName,"A");
        $N = substr_count($inputName,"N");
        $sum = $E + $A + $N;
        if($sum>=3){
            $product = $lengthOfString * $sum;
            if ($product % 6 == 0){
                return "Loyal";
            }else{
                return "Di sure";
            }
        }
        else{
            return "Di sure";
        }
     }  
        echo testLoyalty($inputName);

    }
        
    
    

     ?>
        
    
    

     </div>
    </div>
    </div>
    </div>
</body>
</html>