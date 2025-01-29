<?php
// DB 연결 생성

// DB 연결을 위한 상수 선언
define('DB_SERVER', 'localhost'); 		// Server 주소
define('DB_USERNAME', 'admin');			// 사용자 id
define('DB_PASSWORD', 'student1234');	// 사용자 password
define('DB_NAME', 'test');				// 사용할 DB 이름

// DB Connector 생성
	// Server가 DB와 통신하기 위한 interface 역할을 수행한다.
$db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

?>