<?php
    require 'conn.php';
    $sql = "SELECT * FROM userdb";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Student Bio</title>
</head>

<body>
    <div class="container">
        <h1>จัดการผู้ใช้</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">รหัสผู้ใช้งาน</th>
                    <th scope="col-4">ชื่อผู้ใช้งาน</th>
                    <th scope="col-4">มือถือ</th>
                    <th scope="col-4">อีเมล</th>
                    <th scope="col-4">ที่อยู่</th>
                    <th scope="col-4">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["user_id"]."</td>"."<td>"
                            .$row["user_name"]."</td>"."<td>"
                            .$row["user_mobile"]."</td>"."<td>"
                            .$row["user_email"]."</td>"."<td>"
                            .$row["user_address"]."</td>"."<td>"
                            ."<a class='btn btn-warning' href='editbio.php?user_id="
                            .$row["user_id"]."'>แก้ไข</a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success " href='insertbio.php'>เพิ่มข้อมูลผู้ใช้</a>
    </div>
</body>

</html>