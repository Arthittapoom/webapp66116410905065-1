<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function test($s) {
    $ctr_aa = 0;
    $i = 0;

    while ($i < (strlen($s) - 1)) {
        if (substr($s, $i, 2) == "aa") {
            $ctr_aa++;
            $i++; // ข้ามตัวอักษรที่เรียงติดกัน
        } else {
            $i++;
        }
    }

    return $ctr_aa;
}

echo test("bbaaccaag") . "\n";echo"<br>";
echo test("jjkiaaasew") . "\n";echo"<br>";
echo test("JSaaakoiaa") . "\n";echo"<br>";
?>
</body>
</html>