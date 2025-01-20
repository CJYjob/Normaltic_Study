<?php
	/* 
	DB ID와 PW를 WAS가 알아야하니, 기재. 
	*/
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'admin');
	define('DB_PASSWORD', 'student1234');
	define('DB_NAME', 'test');
	
	/* 
	## DB와 통신하려면, DB와의 연결점이 존재해야합니다. 즉, DB에 로그인해서 세션을 유지하는게 필요합니다.
	## $db_conn 이라는 티켓을 만들어, DB와 소통하는데 사용한다고 생각하면 됩니다.
	*/
	$db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
	
	/*
	DB가 정상적으로 연결되었는지(소통용 티켓이 발급되었는지) 확인하기 위해, $db_conn이 존재하는지 확인한다.
	*/
	if($db_conn) {
		echo "DB Connect OK";
	} else {
		echo "DB Connect Fail";
	}
    /*
	티켓($db_conn)을 사용해서 DB에 쿼리
	(연결한 DB의 테이블을 선택해 내용 가져오기) 날리기
	*/
	$sql = "SELECT * FROM test_table";
	$result = mysqli_query($db_conn, $sql);
	
	/*
	가져온 내용 중에서, 행 하나 가져오기(가져온 행은 내용에서 삭제됨)
	*/
	$row = mysqli_fetch_array($result);
	
	/*
	메타 데이터 출력
	*/
	var_dump($row);
	
	/*
	행에서 원하는 열의 정보 가져오기
	*/
	echo "<br>NAME : ".$row['name'];
	
	/*
	SQL에 WHERE 문 추가해서 재실행
	*/
	$sql = "SELECT * FROM test_table WHERE name='doldol'";
	$result = mysqli_query($db_conn, $sql);
	$row = mysqli_fetch_array($result);
	echo "<br>doldol PASS : ".$row['pass'];
	
	/*
	db에 기재된 password 정보를 가져와서, POST 메서드로 들어온 파라미터와 비교해서 로그인 출력하는 로직이 가능해짐
	if($_POST['userpass'] == $db_pass) {
		// login ok
	}
	*/
?>
