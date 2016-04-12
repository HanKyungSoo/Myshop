<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>I</title>
</head>

    <body>
    <p>
    <?php
$staff_name = $_POST['name'];
$staff_code = $_POST['code'];
//staff_addから文字をdownloadして貰う。
$staff_name = htmlspecialchars($staff_name);
$staff_code = htmlspecialchars($staff_code);

if($staff_name=='')
{
	print'スタッフ名が入力されていません。<br/>';
}
else
{
	print 'スタッフ名 : ';
	print $staff_name;
	print'<form method = "post" action = "staff_edit_done.php" >';
	print '<input type="hidden" name = "name" value ="'.$staff_name.'">';
	print '<input type="hidden" name = "code" value="'.$staff_code.'">';
	print '</br>';
	print '<input type = "button" onclick="history.back()" value = "戻る">';
	print '<input type = "submit" value = "OK">';
	print '</form>';
	print '<br/>';
}

?>
    </body>

</html>