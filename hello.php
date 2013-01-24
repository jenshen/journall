<html>
<body>
Look what I've typed!
<p>

<?php

session_start();

$db = mysql_connect("sql.mit.edu","edethy","Yahoo1");
if (!$db){
    die('Could not connect:'. mysql_error());
}
mysql_select_db("edethy+6470site",$db) or die(mysql_error());

$text = mysql_real_escape_string($_POST['editor1']);
$user_id = $_SESSION['user_id'];
$title = mysql_real_escape_string($_POST['title']);
$city = mysql_real_escape_string($_POST['locations']);
/* Do we want the date to be current date or date of trip?
 * We can just use the now function if today's date*/
$query = "INSERT INTO journals (user_id, title, text, date_posted)
VALUES ('$user_id', '$title', '$text', DATE()) ";
mysql_query($query);
echo 'Your journal has been posted!';

?></p>
</body>
</html>
