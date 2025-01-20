<!--    로그인 페이지와 동일하게 아이디와 비밀번호를 입력받아 GET 방식으로 전달하며,
        아이디와 비밀번호가 관리자의 것과 일치하는지 확인하여, 
        맞는 경우, 로그인 
        다른 경우, 로그인 실패를 출력하는 페이지 입니다.   -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>로그인 처리 결과</title>
</head>
<body>
    <?php
    // GET 방식으로 전달받은 id와 pw 값을 변수에 바인딩.
    $id = $_GET['id'];
    $pw = $_GET['pw'];

    // 로그인 폼 다시 표시
    echo '<form action="login_admin_proc.php" method="get">
            <label for="id">아이디:</label>
            <input type="text" id="id" name="id" required>
            <br>
            <label for="pw">비밀번호:</label>
            <input type="password" id="pw" name="pw" required>
            <br>
            <button type="submit">로그인</button>
            <br><br>
          </form>';

    // id와 pw 출력
    echo "아이디: " . htmlspecialchars($id) . "<br>";
    echo "비밀번호: " . htmlspecialchars($pw) . "<br><br>";
    
    // 로그인 성공 조건
    if ($id === 'admin' && $pw === 'admin1234') {
        // 참 : 성공 문구 출력
        echo "Login Success!!!<br>";
    } else {
        // 거짓 : 실패 문구 출력
        echo "Login Fail...<br>";
        echo "다시 로그인해 주세요.<br><br>";
    }
    ?>

</body>
</html>
