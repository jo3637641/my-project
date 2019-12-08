<?php
include('mysql_con');
$account = $_POST['uname'];
$password = $_POST['pword'];
$Isok = '';
if(!empty($account) && !empty($password)) //判定input值是否為空
{
  $account = mysql_real_escape_string($account);
  $password = mysql_real_escape_string($password);
  $checkinput = mysql_query("SLECT * FROM members WHERE Account = '$account' AND Password = '$password'"); //判定帳號密碼是否已存在
  $row = mysql_fetch_array($checkinput);
  if(empty($row['Account']) && empty($row['Password']))
  {
    $newmember = mysql_query("INSERT INTO members (Account,Password) values ('$account','$password')"); //新增帳號密碼
    if(isset($newmember))
    {
      $Isok = 'TRUE';
      echo $Isok;
    }
    else
    {
      $Isok = 'FALSE';
      echo $Isok;
    }
  }
  else
  {
    echo '帳號或密碼已存在';
  }
  
}
else
{
  echo '未輸入內容';
}
?>
