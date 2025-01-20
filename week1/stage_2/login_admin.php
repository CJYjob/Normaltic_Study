<!--   기본적인 로그인 페이지 뼈대 입니다.   -->
<!--   아이디와 비밀번호를 입력받아 GET 방식으로 처리 페이지에 전달합니다.   -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>관리자 로그인</title>
</head>
<body>
    <!--아이디와 패스워드를 입력받는 폼. 
        GET 방식으로 id와 pw를 login_admin_proc.php에 전달한다. -->
    <form action="login_admin_proc.php" method="get">
        <label for="id">아이디:</label>
        <input type="text" id="id" name="id" required>
        <br>
        <label for="pw">비밀번호:</label>
        <input type="password" id="pw" name="pw" required>
        <br>
        <button type="submit">로그인</button>
    </form>
</body>
</html>
