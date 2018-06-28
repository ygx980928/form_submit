<?php
header('content-type:text/html;charset=utf-8');
$con = mysql_connect("localhost","root","admin");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_select_db("study", $con);
  mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM study  order by id desc");

echo "<table border='1' width='90%' class='table'>
<tr>
<th>姓名</th>
<th>电话</th>
<th>时间</th>
<th>提出的问题</th>
<th>位置</th>
</tr>";

while($row = mysql_fetch_array($result))//转成数组，且返回第一条数据,当不是一个对象时候退出
{
  
   
   

echo "<tr>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['tel'] . "</td>";
echo "<td>" . $row['wx'] . "</td>";
echo "<td>" . $row['question'] . "</td>";
echo "<td>" .   $row['ip'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>
<style>
  table
        {
            border-collapse: collapse;
            margin: 0 auto;
            text-align: center;
        }
        table td, table th
        {
            border: 1px solid #cad9ea;
            color: #666;
           padding-top: 14px;
           padding-bottom: 14px;
            font-size: 28px;

        }
        table thead th
        {
            background-color: #CCE8EB;
            width: 25%;
        }
        table tr:nth-child(odd)
        {
            background: #fff;
        }
        table tr:nth-child(even)
        {
            background: #F5FAFA;
        }

</style>