<?php
$mysql_conf = array(
    'host'    => '127.0.0.1:3306', 
    'db'      => 'user', 
    'db_user' => 'root', 
    'db_pwd'  => 'root', 
    );
$pdo = new PDO("mysql:host=" . $mysql_conf['host'] . ";dbname=" . $mysql_conf['db'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);//创建一个pdo对象
$pdo->exec("set names 'utf8'");
$sql = "select * from tbl_user";
$stmt = $pdo->prepare($sql);
$rs = $stmt->execute();
if ($rs) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        var_dump($row);
        echo "<br>";
        echo($row);
        echo "<br>";
        print_r($row); 
    }
}
$pdo = null;//关闭连接
?> 
