<!-- session_index.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Session_Home</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center"><p class='text-danger'>Session Home</p></h2>

        <?php

        // Session 시작
        session_start();

        // Session을 시작할 때, Session ID 갱신하기.(보안 조치)
        // Argument로 true를 전달하면, 이전 Session Data까지 삭제하고, 완전히 새로운 Session을 생성함.
        session_regenerate_id();

        // 비회원이 /cookie_index.php 경로를 통해 Home page에 접근하면 
        if (!isset($_SESSION['id'])) {
            // cookie_login.php로 Redirection 시킴
            header('Location: session_login.php');
            exit;
        }
        
        $userID = $_SESSION['id'];

        echo "<div class='mt-4'>";
        echo "<p>ID: " . htmlspecialchars($userID) . "</p>";
        echo "<p class='text-danger'>Session Home : Login Success!!!</p>";
        echo "</div>";

        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

