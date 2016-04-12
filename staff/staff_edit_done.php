<!DOCTYPE HTML>
<html>
<head>

<meta charset="UTF-8">
<title>I</title>
</head>

    <body>
    <p>
    <?php

    try
    {$staff_name = $_POST['name'];
	$staff_code = $_POST['code'];

    $staff_name = htmlspecialchars($staff_name);
	$staff_code = htmlspecialchars($staff_code);

    $dsn = 'mysql:dbname=shop;host=localhost;charset=utf8';
    //mysql:dbname=shop;データベース名を指定をします。
    //host=localhost;charset=utf8;ホスト情報と文字集別を指定します。
    $user = 'root';
    //データベースのユーザ名を指定する。
    $password ='';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = 'UPDATE mst_staff SET name = "'.$staff_name.'" where code = "'.$staff_code.'"';
    $stmt = $dbh->prepare($sql);
    $data[] = $staff_name;
    $stmt->execute($data);//??

    $dbh = null;

    print $staff_name;
    print 'さんを修正しました。<br/>';

    }catch(Exception $e)
    {
    	print 'ただいま障害により大変ご迷惑をお掛けしております。';
    	exit();
    }
?>

<a  href ="waitpage.php">戻る</a>
</body>

</html>