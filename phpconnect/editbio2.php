<?php
if(!isset($_GET['uid_dvd'])){
    header("refresh: 0; url=http://localhost/webapp6665-1/phpconnect/mainmenu2.php");
}
require 'conn.php';
$sql = "SELECT * FROM dvd_user WHERE uid_dvd='$_GET[uid_dvd]'";
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
    <form id="form1" name="form1" method="post" action="editsuccess2.php">
        <p>

        <label for="uid_dvd">uid</label>

        <input type="uid_dvd" name="uid_dvd" id="uid_dvd" value="<?=$row['uid_dvd'];?>" />

        </p>

        <p>

            <label for="name_dvd">ชื่อ ภาพยนตร์</label>
            <input type="text" name="uid_dvd" id="uid_dvd" value="<?=$row['uid_dvd'];?>" hidden>
            <input type="text" name="name_dvd" id="name_dvd" value="<?=$row['name_dvd'];?>" />

        </p>

        <p>

            <label for="detail">รายละเอียด</label>

            <input type="text" name="detail" id="detail" value="<?=$row['detail'];?>" />

        </p>

        <p>

            <label for="time">เวลา</label>

            <input type="text" name="time" id="time" value="<?=$row['time'];?>" />

        </p>

        <p>

            <label for="date">วันที่</label>

            <input type="date" name="date" id="date" value="<?=$row['date'];?>" />

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu2.php'>Home</a>
    </form>
</body>

</html>