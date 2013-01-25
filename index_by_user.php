<?php

session_start();
$user_id = 1;

$db = mysql_connect("sql.mit.edu","edethy","Yahoo1");
if (!$db){
    die('Could not connect:'. mysql_error());
}
mysql_select_db("edethy+6470site",$db) or die(mysql_error());
$query = "SELECT title FROM journals WHERE user_id=1";
$result = mysql_query($query,$db);

while($row = mysql_fetch_assoc($result)){
	echo $row['title']."<br \>";
}


?>

