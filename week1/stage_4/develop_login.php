<!-- develop_login.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Develop Login</title>
</head>
<body>

    <!--아이디와 패스워드를 입력받는 폼. 
        GET 방식으로 id와 pw를 현재 페이지에서 처리한다. -->
    <div class="container mt-5">
        <h2 class="text-center">Develop Login</h2>
        <form method="POST" action="" class="mt-4">
            <div class="form-group">
                <input type="text" name="id" class="form-control" placeholder="User ID" required>
            </div>
            <div class="form-group">
                <input type="password" name="pw" class="form-control" placeholder="User Password" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary btn-block" value=Login >
            </div>
        </form>
    </div>

    <?php
        // 다른 PHP 파일 호출하기. 
        require_once("develop_login_func.php");

        $userID = $_POST['id'];
        $userPW = $_POST['pw'];
        $userSM = $_POST['submit'];

        // submit 버튼이 누르면 값이 있고, 아니면 Null값임을 이용해 로그인 시도 구분.
        // submit 버튼을 통해 로그인 시도 시, 내부 코드 실행.
        if(isset($userSM)){
            
            // 입력한 id와 pw로 로그인 여부 판단. by 호출된 PHP 파일의 사용자 함수
            // 로그인 시도자의 Role과 로그인 여부를 문자열로 반환 받음.('admin', 'member', 'fail')
            $login_flag = login($userID, $userPW);


            // 사용자 함수의 결과값이 admin 혹은 member일 때,
            // id, pw, login_flag 정보를 GET 방식으로 첨부하여
            // develop_login_proc.php 로 Redirection
            if ($login_flag === 'admin' || $login_flag === 'member') {
                header('Location: develop_login_proc.php?id='.$userID.'&pw='.$userPW.'&flag='.$login_flag);
                exit;
            // 사용자 함수의 결과값이 admin 혹은 member가 아닌 경우 'Login Fail ...'을 현재 Page 하단에 출력
            } else {
                echo "<h2 class='text-center'><p class='text-danger'>Login Fail ...</p></h2>";
            }
        }
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
