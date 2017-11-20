 <?php
    echo "信息编辑：</br>"; 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>用户管理</title>
</head>
<body>
<table border="1" align="center" bordercolor="black"; cellspacing="0" width="80%">
   <form action="/update" method="post">
     <tr>
        <input style="display: none" name="id" value="$id">
        <td width="100px" align="right">姓名：</td>
        <td><input type="text" name="name" value="$users->name"></td>
    </tr>
    <tr>
        <td width="100px" align="right">年龄：</td>
        <td><input type="text" name="age" value="$users->email"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="提交"></td>
    </tr>
   </form>
</table>
</body>
</html>
