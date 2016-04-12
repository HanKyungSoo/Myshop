<?php
$box = array('','','','','','','','','');
if(isset($_POST["submitbtn"])){
	$box[0] = $_POST["box0"];
	$box[1] = $_POST["box1"];
	$box[2] = $_POST["box2"];
	$box[3] = $_POST["box3"];
	$box[4] = $_POST["box4"];
	$box[5] = $_POST["box5"];
	$box[6] = $_POST["box6"];
	$box[7] = $_POST["box7"];
	$box[8] = $_POST["box8"];
//	print_r($box);

	
	$blank = 0;
	for($i = 0 ; $i<= 8 ; $i++){

		if($box[$i] ==  ''){
			$blank = 1;
		}
	}
	if($blank == 1){
		$i = rand() % 8;
		while($box[$i] != ''){
			$i = rand() % 8;
		}
		$box[$i] = 'o';
	}
}
?>
<html>
<head>
<title>TictacToe</title>
<body>
<form name="tictactoe" method = "post" action= "index.php">
<?php
for ($i = 0; $i<=8;$i++){
	printf('<input type = "text" name = "box%s" value = "%s">',$i,$box[$i]);
	if($i == 2 || $i ==5 || $i ==8)
	{
		print('<br>');
	}
}

print('<input type ="submit" name = "submitbtn" value="go"> ');
?>

</form>
</body>
</head>
</html>