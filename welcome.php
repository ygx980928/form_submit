<?php
header('content-type:text/html;charset=utf-8');
$name = $_POST['name'];
$tel = $_POST['tel'];
date_default_timezone_set('prc');
$wx=date('Y-m-d H:i:s',time());
$ip =  $_POST['ip'];

$question = $_POST['question'];
$con = mysql_connect("localhost","root","admin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

echo $name;
echo $wx;
echo $tel;
echo $question;
mysql_select_db("study");
mysql_query("set names utf8;");
$insert = "insert into study (name,tel,wx,question,ip) values ('$name','$tel','$wx','$question','$ip')";
$res_insert = mysql_query($insert);
if($res_insert){
echo "<br/>插入成功";
} else {
echo "<br/>插入失败";
}
?>
<script type="text/javascript">
	  
         window.location="./index.html"
</script>