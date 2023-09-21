<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
     <?php
     function test($str)
     {
         $s = substr($str, strlen($str)-1);
         return $s.$str.$s;
     }
     
     echo test("Red"),"<br>";
     echo test("Green"),"<br>";
     echo test("1"),"<br>";


     
     ?>
    
    
</body>
</html>