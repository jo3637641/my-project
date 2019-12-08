<?php
include('mysql_con');
$Account = $_POST['account'];
$Isok = '';
if(!empty($Account))
{
  $Account = mysql_real_escape_string($Account);
  $sql = mysql_query("DELETE FROM members WHERE Account = '$Account'");
  $Isok = 'TRUE';
  echo $Isok;
}
else
{
  echo '未輸入內容';
}
?>
