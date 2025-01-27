<?php

session_set_cookie_params([
    'lifetime' => 1800, // 설정된 시간(초) 동안 쿠키가 유효
    'path' => '/', // 쿠키가 유효한 URL 경로 설정 : '/'은 도메인 전체를 의미함
    'domain' => '192.168.0.26', // 쿠키를 사용할 도메인 설정
    'secure' => false, // true: HTTPS 에서만 쿠키 전송, false: HTTP, HTTPS 모두 쿠키 전송
    'httponly' => true, // true: JavaScript로 쿠키 접근 불가
    'samestie' => 'Strict' // 크로스 사이트 요청 방지
]);

?>