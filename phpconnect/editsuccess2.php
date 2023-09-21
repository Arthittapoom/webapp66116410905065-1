<?php
require 'conn.php';
$sql_update="UPDATE dvd_user SET name_dvd='$_POST[name_dvd]'
,detail='$_POST[detail]' ,time='$_POST[time]' ,
date='$_POST[date]' WHERE uid_dvd='$_POST[uid_dvd]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/phpconnect/mainmenu2.php");
}

?>