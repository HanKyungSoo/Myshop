<html><head><meta charset="UTF-8"></head>
<body>
<?php

try
{$staff_name = $_POST['name'];
$staff_pass = $_POST['pass'];

$staff_name = htmlspecialchars($staff_name);
$staff_pass = htmlspecialchars($staff_pass);

$dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
//mysql:dbname=shop;データベース名を指定をします。
//host=localhost;charset=utf8;ホスト情報と文字集別を指定します。
$user = 'root';
//データベースのユーザ名を指定する。
$password ='';
$dbh = new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql = 'INSERT INTO mst_staff(name,password) VALUES (?,?)';
$stmt = $dbh->prepare($sql);
$data[] = $staff_name;//??
$data[] = $staff_pass;
$stmt->execute($data);//??

$dbh = null;

print $staff_name;
print 'さんを追加しました。<br/>';

}catch(Exception $e)
{
	print 'ただいま障害により大変ご迷惑をお掛けしております。';
	exit();
}
?>

<a href ="staff_list.php">戻る</a>
</body>
</html>