<!-- develop_login_proc.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Develop Login Process</title>
</head>
<body>
    <div class="container mt-5">

<?php

$userID = $_GET['id'];
$userPW = $_GET['pw'];
$login_flag = $_GET['flag'];

// 전달받은 login_flag가 admin 혹은 member이면, 
// id와 pw를 GET 방식으로 첨부하여, 
if ($login_flag === 'admin') {
    // admin 페이지로 Redirection
    header('Location: develop_admin.php?id='.$userID.'&pw='.$userPW);
    exit;
} else if ($login_flag === 'member') {
    // index 페이지로 Redirection
    header('Location: develop_index.php?id='.$userID.'&pw='.$userPW);
    exit;
} 

?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>