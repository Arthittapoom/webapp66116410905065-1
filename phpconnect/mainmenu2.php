<?php
    require 'conn.php';
    $sql = "SELECT * FROM dvd_user";
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
        <h1>จัดการภาพยนตร์</h1><br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">ชื่อ ภาพยนตร์</th>
                    <th scope="col-4">รายละเอียด</th>
                    <th scope="col-4">เวลา</th>
                    <th scope="col-4">วันที่</th>
                    <th scope="col-4">แก้ไข</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <td>"
                            .$row["uid_dvd"].
                            "</td>".
                            "<td>"
                            .$row["name_dvd"].
                            "</td>".
                            "<td>"
                            .$row["detail"].
                            "</td>".
                            "<td>"
                            .$row["time"].
                            "</td>".
                            "<td>"
                            .$row["date"].
                            "</td>".
                            "<td>".
                            "<a 
                            class='btn btn-warning' href='editbio2.php?uid_dvd="
                            .$row["uid_dvd"]."'>
                            Edit
                            </a>".

                            "</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
        </table>
        <a class="btn btn-success " href='insertbio2.php'>เพิ่มข้อมูลผู้ใช้</a>
        <a class="btn btn-warning" href='index.html'>หน้าแรก</a>
    </div>
</body>

</html>