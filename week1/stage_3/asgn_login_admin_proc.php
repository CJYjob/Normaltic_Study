<!-- asgn_login_admin_proc.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Assignment Login Process</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Assignment Login Process</h2>

        <!--아이디와 패스워드를 입력받는 폼. 
        GET 방식으로 id와 pw를 asgn_login_admin_proc.php에 전달한다. -->
        <form method="GET" class="mt-4">
            <div class="form-group">
                <input type="text" name="id" class="form-control" placeholder="User ID" required>
            </div>
            <div class="form-group">
                <input type="password" name="pw" class="form-control" placeholder="User Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>

        <?php
        // 전달 받은 데이터를 처리
        // id, pw 를 전달 받았다면? 
            // (required 속성을 주었기 때문에, 
            // 정상적으로 제출 버튼을 눌러 넘어온 페이지라면, 
            // 없을 수 없다.)
        if (isset($_GET['id']) && isset($_GET['pw'])) {

            // 전달 받은 id, pw 변수에 할당
            $userID = $_GET['id'];
            $userPW = $_GET['pw'];

            // id와 pw를 하단에 출력.
            echo "<div class='mt-4'>";
            echo "<p>ID: " . htmlspecialchars($userID) . "</p>";
            echo "<p>PW: " . htmlspecialchars($userPW) . "</p>";

            // id와 pw가 관리자의 것인지 확인하여, 성공 혹은 실패 문구 출력
            if ($userID == "admin" && $userPW == "admin1234") {
                echo "<p class='text-success'>Login Success!!!</p>";
            } else {
                echo "<p class='text-danger'>Login Fail...</p>";
            }
            echo "</div>";
        }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
