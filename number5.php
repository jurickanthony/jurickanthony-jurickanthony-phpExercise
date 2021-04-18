<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial and Absolute</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row " >
<div class="card mt-5">
<div class="card-header bg-light"><h3>Factorial and Absolute</h3></div>
<div class="card-body bg-black">
<form  method="post">
    <div class="form-group">
    
    <br>
    <h5>Enter a number: </h5>
    <input type="number" name="number"  class="form-control ">
    </div>
    <input type="submit" name='submit' class="btn btn-primary">
    
</form>
<br>
    <?php
    
      if(isset($_POST['submit'])) {
        $inputNumber = $_POST['number'];
        function factorialMe($number){
        if($number ==0) {
	       return 1;
         }
         else if($number<0){
           return abs($number);
         }
        else 
        {	
	     return $number * factorialMe($number-1);
        }
	     }
        echo(factorialMe($inputNumber)."\n");
       

        }
        
    
    

     ?>
        
    
    

     </div>
    </div>
    </div>
    </div>
</body>
</html>