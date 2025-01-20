<!-- cookie_index.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Cookie_Home</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center"><p class='text-danger'>Cookie Home</p></h2>

        <?php

        // cookie가 비회원인 경우 /cookie_index.php 경로를 통해 Home page에 접근하면 
        if (!isset($_COOKIE['login_id'])) {
            // cookie_login.php로 Redirection 시킴
            header('Location: cookie_login.php');
            exit;
        }
        
        $userID = $_COOKIE['login_id'];

        // id 및 사용자 로그인 출력
        echo "<div class='mt-4'>";
        echo "<p>ID: " . htmlspecialchars($userID) . "</p>";
        echo "<p class='text-danger'>Cookie Home : Login Success!!!</p>";
        echo "</div>";

        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

