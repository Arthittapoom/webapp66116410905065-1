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
    <form id="form1" name="form1" method="post" action="insertbiosuccess.php">

        <p>

        <label for="user_id">รหัสผู้ใช้งาน</label>

        <input type="user_id" name="user_id" id="user_id">

        </p>

        <p>

            <label for="user_name">ชื่อผู้ใช้งาน</label>
            <input type="text" name="user_name" id="user_name">

        </p>

        <p>

            <label for="user_mobile">มือถือ</label>

            <input type="text" name="user_mobile" id="user_mobile">

        </p>

        <p>

            <label for="user_email">อีเมล</label>

            <input type="text" name="user_email" id="user_email">

        </p>

        <p>

            <label for="user_address">ที่อยู่</label>

            <input type="text" name="user_address" id="user_address">

        </p>
        <input type="submit" class="btn btn-success" value="บันทึก">
        <a class="btn btn-success" href='mainmenu.php'>กลับ</a>
    </form>
</body>

</html>