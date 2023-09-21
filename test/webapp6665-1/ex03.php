<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
     function test($x, $y)
     {
        
        if ($x <= 20 || $y >= 50 || $y <= 20 || $x >= 50){
            $sum = "true";
        }else{
            $sum = "false";
        }

        return $sum;
                 
     }
     
     echo test(20, 84);
     echo "<br>";
     echo test(25, 40);


     
     ?>
    
    
</body>
</html>