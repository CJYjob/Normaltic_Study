<!-- GET 방식으로 사용자 입력을 전달하기 --> 
<form method="GET">
  <input type="text" name="id"/>
</form>

<?php
echo $_GET['id'];
?>