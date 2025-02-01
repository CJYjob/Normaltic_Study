<!-- login_func.php -->

<?php

// 사용자가 기재한 ID와 PW를 입력 받아, 
// 입력 받은 비밀번호를 bcrypt Hash 처리 후,
// 역할(관리자, 사용자, 비회원) 식별하고, 
// 역할에 맞는 문자열 반환. 
function login($inputID, $inputPW) {

    // DB 연결
    require_once 'db_conn.php';
    global $db_conn;



    // 식별/인증 동시 처리 - 개발 사이트 적용 X

    // 입력받은 정보로부터 SQL Query 작성
    $sql = "SELECT `id`, `pw` FROM week3 WHERE `id` = '".$inputID."' AND `pw` = '".$inputPW."';";

    // Query 실행
    $result = mysqli_query($db_conn, $sql);

    // Query가 정상적으로 실행되어, 반환된 값이 있다면(즉, 로그인이 성공하는 케이스)
    if (mysqli_num($result) > 0) {

        // 세션 정보 업데이트
        $_SESSION['login_id'] = $inputID; 
    
        // 결과 행 가져오기.
        $row = mysqli_fetch_array($result);

        $dbID = $row['id'];
        $dbPW = $row['pw'];
        
        // DB 연결 해제
        mysqli_close($db_conn);

        // ID 정보에 따라, Role 부여
        if ($dbID === "admin") {
            // id와 pw가 관리자의 것이면, 'admin' 문자열 반환
            return 'admin';
        } else {
            // id와 pw가 사용자의 것이면, 'member' 문자열 반환
            return 'member';    
        }

    // Query가 정상적으로 실행되지 않은 (즉, 로그인이 실패하는 케이스)
    } else {
        // id와 pw가 관리자 혹은 사용자와 일치하지 않으면, 'fail' 문자열 반환
        return 'fail';
    }

}
?>
