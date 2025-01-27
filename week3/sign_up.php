<!-- sign_up.php  
    1.  사용자 정보 (ID, Password, Name, Phone Number)를 입력 받아, 
        sign_up_proc.php 페이지로 전송한다.
    2.  Login Page로 복귀한다.
-->

<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">

        <!-- bootstrap 사용 목적 -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        
        <!-- Page Title 수정 -->
        <title>Sign Up</title>
    </head>
    <body>
        <!-- 요소들을 Page 가운데 위치시키기 위한 Container 생성 -->
        <div class="container mt-5">

            <!-- Page 상단 제목 -->
            <h2 class="text-center">Sign Up</h2>
            
            <!-- 회원가입 정보 입력을 위한 form 태그 생성. -->
                <!-- 입력 받은 정보는 sign_up_proc.php 파일로 POST 전송 -->
            <form method="POST" action="sign_up_proc.php" class="mt-4">

                <!-- ID 입력창 -->
                <div class="form-group">
                    <input type="text" name="id" class="form-control" placeholder="User ID">
                </div>
                <!-- Password 입력창 -->
                <div class="form-group">
                    <input type="password" name="pw" class="form-control" placeholder="User Password">
                </div>
                <!-- 이름 입력창 -->
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="User Name">
                </div>
                <!-- 휴대폰 번호 입력창 -->
                <div class="form-group">
                    <input type="text" name="phone_no" class="form-control" placeholder="User Phone Number : 000-0000-0000">
                </div>
                <!-- 회원가입 실행 버튼 -->
                <div class="form-group">
                    <input type="submit" name="sign_up" class="btn btn-primary btn-block" value="Sign Up">
                </div>
                <!-- 로그인 화면 복귀 버튼 -->
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary btn-block" value="Login">
                </div>
            </form>
        </div>

        <!-- bootstrap 사용 목적 -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
