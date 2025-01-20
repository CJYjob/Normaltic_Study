<!-- cookie_login.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cookie Login</title>
</head>
<body>
    
    <!-- login page의 상단에 제목 및 정보 입력을 위한 form 태그 생성. -->
    <!-- 입력 받은 정보는 cookie_login_proc.php 파일로 전송하여 처리 -->
    <div class="container mt-5">
        <h2 class="text-center">Cookie Login</h2>
        <form method="POST" action="cookie_login_proc.php" class="mt-4">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
