<?php
require 'conn.php';
$sql_update="UPDATE users SET f_name='$_POST[f_name]',l_name='$_POST[l_name]' ,address='$_POST[address]' ,telephone='$_POST[telephone]' WHERE uid='$_POST[uid]' ";

$result= $conn->query($sql_update);

if(!$result) {
    die("Error God Damn it : ". $conn->error);
} else {

echo "Edit Success <br>";
header("refresh: 1; url=http://localhost/webapp6665-1/phpconnect/mainmenu.php");
}

?>