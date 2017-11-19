 <?php
    echo "信息录入：</br>"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>
</head>
<body>
<table border="1" align="center" bordercolor="black"; cellspacing="0" width="80%">
   <form action="/save" method="post">
     <tr>
        <td width="100px" align="right">姓名：</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
    <tr>
        <td width="100px" align="right">年龄：</td>
        <td><input type="text" name="age" value=""></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="提交"></td>
    </tr>
   </form>
</table>
</body>
</html>
