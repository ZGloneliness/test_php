<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 17/5/3
 * Time: 下午10:03
 */
try{

    $dbh = new PDO('mysql:host=127.0.0.1;dbname=zougang', 'web', '824903');

}catch(PDOException $e){
    echo '数据库连接失败'.$e->getMessage();

}
