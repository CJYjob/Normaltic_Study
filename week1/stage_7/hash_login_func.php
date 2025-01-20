<!-- develop_login_func.php -->

<?php
function login($userID, $userPW) {
    $adminID='admin';
    $adminPW=password_hash('admin1234', PASSWORD_DEFAULT);

    $memberID='cjy';
    $memberPW=password_hash('cjy1234', PASSWORD_DEFAULT);

    if($userID === $adminID && $userPW === $adminPW){
        return 'admin';
    } else if($userID === $memberID && $userPW === $memberPW) {
        return 'member';        
    } else {
        return 'fail';
    }
}
?>
