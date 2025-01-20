<!-- hash_login.php -->

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <form method="POST" action="hash_login_proc.php" class="mt-4">
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
