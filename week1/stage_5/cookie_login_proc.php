<!-- cookie_login_proc.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cookie Login Process</title>
</head>
<body>
    <div class="container mt-5">

<?php

$userID = $_POST['id'];
$userPW = $_POST['pw'];
$userSM = $_POST['submit'];

// Cookie를 사용해야 하므로(?), POST 메서드를 사용하는지 확인한다.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // submit 버튼이 눌렸는가? 로 로그인 시도 구분
    if(isset($userSM)) {
        // 사용자 함수 삽입. 
        // func 함수 develop에서 변경 없음.
        require_once('develop_login_func.php');

        // 입력한 id와 pw로 로그인 여부 판단. by 호출된 PHP 파일의 사용자 함수
            // 로그인 여부를 로그인 시도자의 Role 문자열로 반환 받음.('admin', 'member', 'fail')
        $login_flag = login($userID, $userPW);
    }

    // 관리자인 경우 쿠키에 로그인 아이디를 저장하고 / cookie_admin.php로 Redirection 한다.
    if ($login_flag === 'admin'){
        // cookie 저장 : 
            // cookie 이름 = 'login id', 
            // cookie 값 = 입력한 아이디, 
            // 유지 시간 = 1시간, 
            // 사용 경로 = 도메인의 페이지 전체
        setcookie('login_id', $userID, time()+3600, '/'); 
        header('Location: cookie_admin.php');
        exit;
    // 사용자인 경우 쿠키에 로그인 아이디를 저장하고 / cookie_index.php로 Redirection 한다.
    } else if ($login_flag === 'member') {
        // cookie 저장 :
            // cookie 이름 = 'login id', 
            // cookie 값 = 입력한 아이디, 
            // 유지 시간 = 1시간, 
            // 사용 경로 = 도메인의 페이지 전체
        setcookie('login_id', $userID, time()+3600, '/' ); //
        header('Location: cookie_index.php');
        exit;
    } else {
        header("Location: cookie_login.php");
        exit;
    }
} else {
    // POST 메서드를 사용하지 않는 경우, login 페이지로 Redirection 한다.
    header("Location: coockie_login.php");
    exit;
}
?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>