<?php

session_start();
$user_id = $_SESSION['user_id'];

$db = mysql_connect("sql.mit.edu","edethy","Yahoo1");
if (!$db){
    die('Could not connect:'. mysql_error());
}
mysql_select_db("edethy+6470site",$db) or die(mysql_error());

function get_journals_by_user($user_id)
{
 $query = "SELECT title FROM journals WHERE journals.user_id = $user_id ORDER BY journals.date DESC";
 $result = mysql_query($query,$db);
 $posts = array();
 
 while($row = mysql_fetch_assoc($query)){
    $posts[] = $row;
 }
 
 return $posts;
}

$titles = get_journals_by_user($user_id);

foreach($titles as $title){
    ?>
    <h2><a href = ''><?php echo $title['title']; ?></a></h2>
}

?>
