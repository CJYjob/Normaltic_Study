<!-- login_func.php -->

<?php

// 사용자가 기재한 ID와 PW를 입력 받아, 
// 입력 받은 비밀번호를 bcrypt Hash 처리 후,
// 역할(관리자, 사용자, 비회원) 식별하고, 
// 역할에 맞는 문자열 반환. 
function login($userID, $userPW) {

    $adminID='admin';
    $adminPW=password_hash('admin1234', PASSWORD_DEFAULT);

    $memberID='cjy';
    $memberPW=password_hash('cjy1234', PASSWORD_DEFAULT);

    $userPW = password_hash($userPW, PASSWORD_DEFAULT) 

    // echo "<script>alert('{$userPW}')</script>";
    echo 'login_func';

    if($userID === $adminID && $userPW === $adminPW){
        // id와 pw가 관리자의 것이면, 'admin' 문자열 반환
        return 'admin';
    } else if($userID === $memberID && $userPW === $memberPW) {
        // id와 pw가 사용자의 것이면, 'member' 문자열 반환
        return 'member';        
    } else {
        // id와 pw가 관리자 혹은 사용자와 일치하지 않으면, 'fail' 문자열 반환
        return 'fail';
    }
}
?>
