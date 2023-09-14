<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
     function test($tamp1, $tamp2)
     {
        
        if ($tamp1 < 0  && $tamp2 > 100 || $tamp2 < 0 && $tamp1 > 100){
            $tamp = "true";
        }else{
            $tamp = "false";
        }

        return $tamp;
                 
     }
     
     echo test(2, 120);


     
     ?>
    
    
</body>
</html>