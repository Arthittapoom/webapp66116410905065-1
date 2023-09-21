<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function test($n) {
    return ($n % 3 == 0) || ($n % 7 == 0);
}

var_dump(test(3));echo"<br>";
var_dump(test(14));echo"<br>";
var_dump(test(12));echo"<br>";
var_dump(test(37));echo"<br>";
?>
</body>
</html>