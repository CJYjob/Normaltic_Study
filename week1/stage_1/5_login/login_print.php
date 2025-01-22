<!-- form 태그로 사용자 입력을 받아, GET 방식으로 전달 및 출력하기 -->

<form method="GET" action="login_print.php">  <!-- action 속성으로 입력받은 데이터를 전달받아 처리할 페이지 지정 -->
  <input type="text" name="id" placeholder="User ID"/>
  <input type="password" name="pass" placeholder="User Password"/>
  <input type="submit" value="login"/>
</form>

<?php
echo $_GET['id'];    // 'id' 변수에 담긴 아이디 출력
echo "<br>";
echo $_GET['pass'];  // 'pass' 변수에 담긴 비밀번호 출력
?>