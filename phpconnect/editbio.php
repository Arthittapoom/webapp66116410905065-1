<?php
if(!isset($_GET['uid'])){
    header("refresh: 0; url=http://localhost/webapp6665-1/phpconnect/mainmenu.php");
}
require 'conn.php';
$sql = "SELECT * FROM users WHERE uid='$_GET[uid]'";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body class="container">
    <form id="form1" name="form1" method="post" action="editsuccess.php">
        <p>

        <label for="uid">uid</label>

        <input type="uid" name="uid" id="uid" value="<?=$row['uid'];?>" />

        </p>

        <p>

            <label for="sname">ชื่อ</label>
            <input type="text" name="uid" id="uid" value="<?=$row['uid'];?>" hidden>
            <input type="text" name="f_name" id="f_name" value="<?=$row['f_name'];?>" />

        </p>

        <p>

            <label for="slastname">นามสกุล</label>

            <input type="text" name="l_name" id="l_name" value="<?=$row['l_name'];?>" />

        </p>

        <p>

            <label for="address">ที่อยู่</label>

            <input type="text" name="address" id="address" value="<?=$row['address'];?>" />

        </p>

        <p>

            <label for="telephone">เบอร์โทร</label>

            <input type="text" name="telephone" id="telephone" value="<?=$row['telephone'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>Home</a>
    </form>
</body>

</html>