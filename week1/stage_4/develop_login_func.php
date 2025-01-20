<!-- develop_login_func.php -->

<?php

// 사용자가 기재한 ID와 PW를 입력 받아, 
// 역할(관리자, 사용자, 비회원) 식별하고, 
// 역할에 맞는 문자열 반환. 
function login($userID, $userPW) {
    $adminID='admin';
    $adminPW='admin1234';

    $memberID='cjy';
    $memberPW='cjy1234';

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
