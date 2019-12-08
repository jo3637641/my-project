<?php
include('mysql_con');
$Account = $_GET['account'];
$Password = $_GET['pword'];
if(!empty($Account) && !empty($Password))
{
  $Account = mysql_real_escape_string($Account);
  $Password = mysql_real_escape_string($Password);
  $sql = mysql_query("SELECT * FROM members WHERE Account = '$Account' AND Password = '$Password'");
  $row = mysql_fetch_array($sql);
  if($row['Account'] != null && $row['Password'] != null)
  {
    header("Status: 200 StatusOK");
  }
  else
  {
    header("Status: 400 Bad Request");
    exit();
  }
}
else
{
  echo '未輸入內容';
}
?>
