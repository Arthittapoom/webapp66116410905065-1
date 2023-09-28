<?php
require 'conn.php';
$sql_update="INSERT INTO userdb(user_id,user_name,user_mobile,user_email,user_address)
 VALUES ('$_POST[user_id]','$_POST[user_name]','$_POST[user_mobile]' ,'$_POST[user_email]'
  ,'$_POST[user_address]')";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Insert Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/php/mainmenu.php");
}

?>