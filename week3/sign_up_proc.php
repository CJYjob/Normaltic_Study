<!-- sign_up_proc.php
    Sign Up Page에서의 사용자 반응에 따라,
    입력받은 정보를 처리하고,
    Login Page로 Redirection 한다.
-->

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">

        <!-- bootstrap 사용 목적 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- Page Title 수정 -->
        <title>Sign Up Process</title>
    </head>
    <body>

        <!-- 요소들을 Page 가운데 위치시키기 위한 Container 생성 -->
        <div class="container mt-5">

        <?php

$userID = $_POST['id'];
$userPW = password_hash($_POST['pw'], PASSWORD_DEFAULT);
$userNM = $_POST['name'];
$userPN = $_POST['phone_no'];
$userLI = $_POST['login'];
$userSU = $_POST['sign_up'];

// Data를 Server로 보내는 작업에서는 보안을 위해, POST 메서드를 사용하는지 확인한다.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Login Button의 값이 할당되어 있다면,
    // Login Page로 Redirection.
    if(isset($userLI)) {
        
        header("Location: login.php");
        exit;
    
    // Sign Up Button의 값이 할당되어 있다면,
    // 회원가입 시도로 판단
    } else if (isset($userSU)) {

        // 빈 값이 있는지 확인
        if (empty($userID) || empty($userPW) || empty($userNM) || empty($userPN)) {
            echo "<script>
            alert('모든 입력값을 채워주세요.');
            history.back(); // 이전 페이지로 이동
            </script>";
            exit;
        }

        // 입력 받은 정보로 회원 가입 정보를 DB에 저장
        require_once('db_insert.php');
        $result = mysqli_insert('week3', NULL, [$userID, $userPW, $userNM, $userPN]);
        
        //회원 가입 결과 문구 출력 및 Redirection
        // 성공 시 '회원 가입 성공' 알림 및 메인 페이지 이동
        if ($result===TRUE){ 
            echo '<script>alert("회원 가입 성공")</script>';
            echo "<script>window.location.href='login.php';</script>";
            exit;
            // 실패 시 '사용중인 정보입니다' 알림 및 정보를 기입하던 이전 페이지로 이동
        } else {
            echo '<script>alert("사용중인 정보입니다")</script>';
            echo "<script>history.back();</script>";
            exit;
        }
    }
} else {
    // POST Method를 사용하지 않으면, 잘못된 접근이므로, Sign Up Page로 Redirection
    header("Location: sign_up.php");
    exit;
}
?>

        </div>
        
        <!-- bootstrap 사용 목적 -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>