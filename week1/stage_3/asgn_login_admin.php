<!-- asgn_login_admin.php -->
<!-- stage_1에 bootstrap을 적용하여 꾸미기 -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Assignment Login</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Assignment Login</h2>

        <!--아이디와 패스워드를 입력받는 폼. 
        GET 방식으로 id와 pw를 asgn_login_admin_proc.php에 전달한다. -->
        <form method="GET" action="asgn_login_admin_proc.php" class="mt-4">
            <div class="form-group">
                <input type="text" name="id" class="form-control" placeholder="User ID" required>
            </div>
            <div class="form-group">
                <input type="password" name="pw" class="form-control" placeholder="User Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
