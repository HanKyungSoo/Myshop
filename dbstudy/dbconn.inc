<?
$db_name = "bbs";
$user_name = "ubunet@09";
$user_password = "ubinet@09";

$dbconn = mysql_connect("localhost",$user_name,$user_password);
$status = mysql_select_db($db_name,$dbconn);
?>