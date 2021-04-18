<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime or not</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

<div class="container">
<div class="row " >
<div class="card mt-5">
<div class="card-header bg-light"><h3>Test me if I'm a prime</h3></div>
<div class="card-body bg-info">
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
    
      if(isset($_POST['submit'])== "Submit") {
        $inputNumber = $_POST['number'];
        function primeOrNot($number)
        {
           if ($number == 1)
           return 0;
           for ($i = 2; $i <= $number/2; $i++)
           {
              if ($number % $i == 0)
              return 0;
           }
           return 1;
        }
        $number = $inputNumber;
        $flag_val = primeOrNot($number);
        if ($flag_val == 1)
           echo "Im a  prime number";
        else
           echo "Im not prime number";
        }
    

     ?>
        
    
    

     </div>
    </div>
    </div>
    </div>
</body>
</html>