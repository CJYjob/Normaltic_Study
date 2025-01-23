<!-- 
회원 가입 Page
    - ID, PW, Name, Phone 입력창과 제출 버튼.
    - 기입된 정보는 test DB에 저장.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <!-- 사용자 입력(필수) -->
    <form action="sign_up.php" method="post">
        <label for="id">ID : </label><input type="text" name="id" id="id" required><br>
        <label for="pw">PW : </label><input type="text" name="pw" id="pw" required><br>
        <label for="name">Name : </label><input type="text" name="name" id="name" required><br>
        <label for="phone_no">Phone Number : </label><input type="text" name="phone_no" id="phone_no" required><br>
        <input type="submit" value="Sign Up">
    </form>

    <?php

        // 사용자 입력 
        $id = $_POST['id'];
        $pw = $_POST['pw'];
        $name = $_POST['name'];
        $phone_no = $_POST['phone_no'];

        // DB 연결용 상수 선언
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'admin');
        define('DB_PASSWORD', 'student1234');
        define('DB_NAME', 'test');

        // DB Connector 생성
        $db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // DB에 정보를 삽입하여, 회원 가입 수행.
            // 정보가 모두 기입된 경우에만 삽입 수행.
        if (isset($id) AND isset($pw) AND isset($name) AND isset($phone_no)) {
            
            // 정보 삽입용 SQL Query 작성
            $sql = 'INSERT INTO `week2` VALUES (\''.$id.'\', \''.$pw.'\', \''.$name.'\', \''.$phone_no.'\')';
            
            // Query 실행
            $result = mysqli_query($db_conn, $sql);

            // 회원 가입 결과 문구 출력 및 Redirection
                // 성공 시 '회원 가입 성공' 알림 및 메인 페이지 이동
            if ($result===TRUE){ 
                echo '<script>alert("회원 가입 성공")</script>';
                echo "<script>window.location.href='main.php';</script>";
                // 실패 시 '사용중인 정보입니다' 알림 및 정보를 기입하던 이전 페이지로 이동
            } else {
                echo '<script>alert("사용중인 정보입니다")</script>';
                echo "<script>history.back();</script>";
            }
        }
        
        // DB 연결 해제
        mysqli_close($db_conn);

    ?>
    
</body>
</html>