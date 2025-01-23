<!-- 
로그인 Page
    - ID, PW 입력창과 제출 버튼.
    - 기입된 정보를 test DB에서 조회하여, 회원 여부 확인.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <!-- 사용자 입력(필수) -->
    <form action="login.php" method="post">
        <label for="id">ID : </label><input type="text" name="id" id="id" required><br>
        <label for="pw">PW : </label><input type="text" name="pw" id="pw" required><br>
        <input type="submit" value="login">
    </form>

    <?php

        // 사용자 입력 
        $id = $_POST['id'];
        $pw = $_POST['pw'];

        // DB 연결용 상수 선언
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'admin');
        define('DB_PASSWORD', 'student1234');
        define('DB_NAME', 'test');

        // DB Connector 생성
        $db_conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // DB에 정보를 조회하여, 로그인 여부 출력.
            // 정보가 모두 기입된 경우에만 정보 조회 수행.
        if (isset($id) AND isset($pw)) {
            
            // 정보 조회용 SQL Query 작성
            $sql = 'SELECT * FROM `week2` WHERE id=\''.$id.'\' AND pw=\''.$pw.'\';';

            // Query 실행
            $result = mysqli_query($db_conn, $sql);
            $row = mysqli_fetch_array($result);

            // 로그인 결과 문구 출력 및 Redirection
                // 성공 시 '로그인 성공' 알림 및 메인 페이지 이동
            if ($row['id'] != NULL){ 
                echo '<script>alert("로그인 성공")</script>';
                echo "<script>window.location.href='main.php';</script>";
                // 실패 시 '로그인 실패' 알림 및 정보를 기입하던 이전 페이지로 이동
            } else {
                echo '<script>alert("로그인 실패")</script>';
                echo "<script>history.back();</script>";
            }
        }

        // DB 연결 해제
        mysqli_close($db_conn);

    ?>
    
</body>
</html>