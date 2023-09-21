<?php
require 'conn.php';
$sql_update="INSERT INTO dvd_user(uid_dvd,name_dvd,detail,time,date) 
VALUES ('$_POST[uid_dvd]','$_POST[name_dvd]','$_POST[detail]' ,
'$_POST[time]' ,'$_POST[date]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/phpconnect/mainmenu2.php");
}

?>