<!-- login_proc.php -->

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

        // DB 연결
        require_once 'db_conn.php';

        // session 설정
        require_once 'set_session.php';

        // Session 시작
        session_start();

        $userID = $_POST['id'];
        $userPW = $_POST['pw'];
        $userLI = $_POST['login'];
        $userSU = $_POST['sign_up'];

        // Data를 Server로 보내는 작업에서는 보안을 위해, POST 메서드를 사용하는지 확인한다.
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Login Button의 값이 할당되어 있다면,
            // 로그인 시도로 판단
            if(isset($userLI)) {

                // 전달된 값 중, NULL 값이 있는지 확인
                if (empty($userID) || empty($userPW)) {
                    echo "<script>
                        alert('모든 입력값을 채워주세요.');
                        history.back(); // 이전 페이지로 이동
                        </script>";
                    exit;
                }
                
                // 사용자 함수 Page 삽입. 
                require_once('login_func.php');

                // 입력한 id와 pw로 로그인 여부 판단. by 호출된 PHP 파일의 사용자 함수
                    // 로그인 여부를 로그인 시도자의 Role 문자열로 반환 받음.('admin', 'member', 'fail')
                $login_flag = login($userID, $userPW);

            // Sign Up Button의 값이 할당되어 있다면,
            // 회원가입 시도로 판단
            } else if (isset($userSU)) {

                // Sign Up Page로 Redirection
                header("Location: sign_up.php");
                exit;
                
            }

            // // 관리자인 경우 Session에 Login ID와 Role을 저장하고 / session_admin.php로 Redirection 한다.
            // if ($login_flag === 'admin'){        
            //     $_SESSION['id'] = $userID;
            //     $_SESSION['role'] = 'admin'; 
            //     header('Location: session_admin.php');
            //     exit;
            // // 사용자인 경우 Session에 Login ID와 Role을 저장하고 / session_index.php로 Redirection 한다.
            // } else if ($login_flag === 'member') {
            //     $_SESSION['id'] = $userID;
            //     $_SESSION['role'] = 'member'; 
            //     header('Location: session_index.php');
            //     exit;
            // // 비회원인 경우 login page로 Redirection
            // } else {
            //     header("Location: session_login.php");
            //     exit;
            // }
        } else {
            // POST 메서드를 사용하지 않으면, 잘못된 접근이므로, login 페이지로 Redirection 한다.
            header("Location: session_login.php");
            exit;
        }
        ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>