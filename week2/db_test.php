<?php

// DB 연결을 위한 상수 선언
define('DB_SERVER', 'localhost'); 		// Server 주소
define('DB_USERNAME', 'admin');			// 사용자 id
define('DB_PASSWORD', 'student1234');	// 사용자 password
define('DB_NAME', 'test');				// 사용할 DB table 이름

// DB Connector 생성
	// Server가 DB와 통신하기 위한 interface 역할을 수행한다.
$db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// DB 연결 확인
	// $db_conn 변수에 값이 존재하는지 확인한다. (있음 = 성공, 없음 = 실패)
if ($db_conn) {
	echo "DB Connect OK!!!";
} else {
	echo "DB Connect Fail...";
}

// SQL Query 작성하기
$sql = 'SELECT * FROM test_table';

// SQL Query를 DB에 명령하기
	// mysqli_query() 함수를 사용한다.
	//		첫 번째 매개변수로 생성한 DB Connetor를 입력
	//		두 번째 매개변수로 작성한 SQL Query를 입력한다.
	//		반환값으로 Query를 수행한 결과값이 주어진다.
	// 		(변수에 할당하지 않아, 수행만 하고, 버리지 않도록 주의)
$result = mysqli_query($db_conn, $sql);

// 결과 중, 첫 행 가져오기
	//	(가져오면 결과에서 삭제됨. 마찬가지로 변수에 할당해 버리지 않도록 주의)
	//	계속해서 사용하면, 다음 행의 정보를 가져올 수 있음.
$row = mysqli_fetch_array($result);

// 행 확인
var_dump($row); // 행 데이터 덩어리 출력
echo '<br>'.'Name : '.$row['name']; // 행의 'name' 열 정보 출력

// 추가) SQL Query에 WHERE문 추가하여 재실행하기
$sql = 'SELECT * FROM test_table WHERE `score` > 75;';
$result = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($result);
var_dump($row);
echo '<br>'.$row['name'].'\'s score is '.$row['score']; 
echo '<br>'.$row['name'].'\'s password is '.$row['pass'];
?>