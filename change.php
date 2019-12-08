<?php
include('mysql_con');
$Account = $_POST['account'];
$Password = $_POST['pword'];
$Isok = '';
if(!empty($Account) && !empty($Password))
{
  $Account = mysql_real_escape_string($Account);
  $Password = mysql_real_escape_string($Password);
  $sql = mysql_query("UPDATE members SET Account = '$Account',Password = '$Password'");
  $Isok = 'TRUE';
  echo $Isok;
}
else
{
  echo '未輸入內容';
}
?>
