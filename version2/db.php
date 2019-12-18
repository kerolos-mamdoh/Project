<html>
<body>
<?php

if(isset($_POST['d'])){
	mysql_connect("localhost","root","root");
	mysql_select_db("web");
	$type=mysql_escape_string($_POST['t']);
	$target=mysql_escape_string($_POST['a']);
	$date=mysql_escape_string($_POST['da']);
	mysql_query("INSERT INTO web VALUES ('$type','$target','$date')");
	exit();
}

if(isset($_GET['d'])){
	$link = mysqli_connect("localhost", "root", "root", "web");
	$sql = "SELECT * FROM web";
	if($result = mysqli_query($link, $sql))
	{
		$rows=array();
	while($row = mysqli_fetch_array($result))
	{
		array_push($rows,$row);
	}
	}
	echo json_encode($rows);
}
?>
</body>
</html>