<!-- develop_admin.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Develop Admin</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center"><p class='text-success'>Develop Admin</p></h2>

        <?php
        
        $userID = $_GET['id'];
        $userPW = $_GET['pw'];

        // 전달 받은 id, pw와 관리자 로그인 성공 문구 출력
        echo "<div class='mt-4'>";
        echo "<p>ID: " . htmlspecialchars($userID) . "</p>";
        echo "<p>PW: " . htmlspecialchars($userPW) . "</p>";
        echo "<p class='text-success'>Admin : Login Success!!!</p>";
        echo "</div>";
        
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
