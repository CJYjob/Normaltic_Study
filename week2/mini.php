<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<form action='mini.php' method='get'>
		<label for='name'> Name : </label>
		<input type='text' id='name' name='name' required><br>
		<button type='submit'>Submit</button><br><br>
	</form>

	<?php

	// DB 연결을 위한 상수 선언
	define('DB_SERVER', 'localhost'); 		// Server 주소
	define('DB_USERNAME', 'admin');			// 사용자 id
	define('DB_PASSWORD', 'student1234');	// 사용자 password
	define('DB_NAME', 'test');				// 사용할 DB table 이름

	// DB Connector 생성
		// Server가 DB와 통신하기 위한 interface 역할을 수행한다.
	$db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	// GET 방식으로 이름 받아오기
	$name = $_GET['name'];

	// 추가) SQL Query에 WHERE문 추가하여 재실행하기
	$sql = 'SELECT * FROM test_table WHERE `name` = \''.$name.'\';';
	$result = mysqli_query($db_conn, $sql);
	$row = mysqli_fetch_array($result);
	echo '<br>'.$row['name'].'\'s score is '.$row['score'];

	?>
</body>
</html>

