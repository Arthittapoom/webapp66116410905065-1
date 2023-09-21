<?php
require 'conn.php';
$sql_update="INSERT INTO users(uid,f_name,l_name,address,telephone) VALUES ('$_POST[uid]','$_POST[f_name]','$_POST[l_name]' ,'$_POST[address]' ,'$_POST[telephone]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/phpconnect/mainmenu.php");
}

?>