<?php

include 'db.php';

if(!$connection){
    die("Connection Failed");
}

$result = mysql_query("SELECT * FROM employee");
$rows = mysql_num_rows($result);
echo $rows;
?>