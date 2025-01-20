<!-- hash_login_proc.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login Process</title>
</head>
<body>
    <div class="container mt-5">

<?php
// Session 시작
session_start();

// Session을 시작할 때, Session ID 갱신하기.(보안 조치)
// Argument로 true를 전달하면, 이전 Session Data까지 삭제하고, 완전히 새로운 Session을 생성함.
session_regenerate_id();

$userID = $_POST['id'];
$hashed_userPW = password_hash($_POST['pw'], PASSWORD_DEFAULT); // Password는 Hash 처리하여 변수에 할당
$userSM = $_POST['submit'];

// Data를 Server로 보내는 작업에서는 보안을 위해, POST 메서드를 사용하는지 확인한다.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // submit 버튼이 눌렸는가? 로 로그인 시도 구분
    if(isset($userSM)) {
        // func 함수 develop에서 변경 없음.
        require_once('hash_login_func.php');

        // 입력한 id와 pw로 로그인 유형 판단. by 사용자 함수
        $login_flag = login($userID, $hashed_userPW);
    }

    // 관리자인 경우 Session에 Login ID와 Role을 저장하고 / session_admin.php로 Redirection 한다.
    if ($login_flag === 'admin'){        
        $_SESSION['id'] = $userID;
        $_SESSION['role'] = $login_flag; 
        header('Location: session_admin.php');
        exit;
    // 사용자인 경우 Session에 Login ID와 Role을 저장하고 / session_index.php로 Redirection 한다.
    } else if ($login_flag === 'member') {
        $_SESSION['id'] = $userID;
        $_SESSION['role'] = $login_flag; 
        header('Location: session_index.php');
        exit;
    // 비회원인 경우 login page로 Redirection
    } else {
        header("Location: hash_login.php");
        exit;
    }
} else {
    // POST 메서드를 사용하지 않으면, 잘못된 접근이므로, login 페이지로 Redirection 한다.
    header("Location: hash_login.php");
    exit;
}
?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>