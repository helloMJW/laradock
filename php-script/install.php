<?php
include("/home/php-script/env.php");
// 下载项目
passthru("composer create-project flarum/flarum {$projectUrl} --stability=beta" );

// 创建连接
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 创建数据库
if(!checkDb($conn, $dbname)) {

        $sql = "CREATE DATABASE {$dbname}";
        if ($conn->query($sql) === TRUE) {
            echo "数据库创建成功";
        } else {
            echo "Error creating database: " . $conn->error;
        }
} else {
        echo '数据库' .$dbname. '已经存在';
}

$conn->close();


//检查数据库存在
function checkDb($conn, $dbName)
{
        $sql = "SHOW DATABASES";
        $dbArr = array();
        foreach ($conn->query($sql) as $row) {
        $dbArr[] = $row ['Database'];
        }

        return in_array($dbName, $dbArr);
}

