 <?php
    echo "HELLO PHP</br>"; 
    echo "数据库操作";
   # $con = mysql_connect("118.89.227.17:3306","root","root");
   # if(!$con){
   #      echo "<h2>未能连接</h2>";
   #      }
   # $mysql_server_name="localhost";
   # $mysql_username="root";
   # $mysql_password="root"; 
   # $mysql_database="user";
   # $conn=mysql_connect($mysql_server_name, $mysql_username,$mysql_password);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>
</head>
<body>
<table border="1" align="center" bordercolor="black"; cellspacing="0" width="80%">
    <tr>
        <td width="100px" align="right"><a href="/home">主页</a></td>
        <td width="100px" align="right"><a href="/help">帮助</a></td>
        <td width="100px" align="right"><a href="/about">关于</a></td>
        <td colspan="2" width="100px" align="right"><a href="/add">添加</a></td>
    </tr>
    <tr>
        <td>关键字：</td>
        <td>
            <select name="keyword">
               <option value="NULL"></option>
               <option value="name">姓名</option>
               <option value="age">年龄</option> 
            </select>
        </td>
        <td><input name="Type"></td>
        <td colspan="2"><a href="/query">查询</a></td>
    </tr>
    <tr>
        <td width="100px">序号</td>
        <td width="100px">姓名</td>
        <td>年龄</td>
        <td colspan="2" align="center">操作</td>
    </tr>
    <tr>
        <td>1</td>
        <td width="100px">约翰.纳什</td>
        <td width="100px">25</td>
        <td align="center"><a href="/edit">编辑</a></td>
        <td align="center"><a href="/delete">删除</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td width="100px">肖申克</td>
        <td width="100px">25</td>
        <td align="center"><a href="/edit">编辑</a></td>
        <td align="center"><a href="/delete">删除</a></td>
    </tr>
</table>
</body>
</html>
