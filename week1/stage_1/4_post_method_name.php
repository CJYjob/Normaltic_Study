<!-- POST 방식으로 사용자 입력을 전달하기 --> 
<form method="POST">
  <input type="text" name="id"/>
</form>

<?php
echo $_POST['id'];
?>