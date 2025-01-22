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

?>