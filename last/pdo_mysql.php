<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 17/4/19
 * Time: 下午4:15
 */

$host = 'localhost';
$database = 'zougang';
$username = 'web';
$password = '824903';
$selectName = 'harry';//要查找的用户名，一般是用户输入的信息
$pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);//创建一个pdo对象
$pdo->exec("set names 'utf8'");
$sql = "select * from student where name = '李四'";
$stmt = $pdo->prepare($sql);
//$qwe="insert into student (name,age,job) VALUES ('邹刚','45','xipanzi')"
$sql="delete from student where name='邹刚'";
$res=$pdo->exec($sql);
echo '影响行数：'.$res;
$rs = $stmt->execute(array($selectName));
if ($rs) {
    // PDO::FETCH_ASSOC 关联数组形式
    // PDO::FETCH_NUM 数字索引数组形式
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['name'];
        $age = $row['age'];
        echo "Name: $name ";
        echo "Age: $age ";
        echo "\n";
    }
}
$pdo = null;//关闭连接