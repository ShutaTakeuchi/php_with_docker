<?php
function connect_db(){
    //ホスト名、データベース名、文字コードの３つを定義する
    $host = 'mysql5.7';
    $db = 'test';
    $charset = 'utf8';
    $dsn = "mysql:host=$host; dbname=$db; charset=$charset";

    //ユーザー名、パスワード
    $user = 'test';
    $pass = 'test';

    //オプション
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    try{

        //上のデータを引数に入れて、PDOインスタンスを作成
        $pdo = new PDO($dsn, $user, $pass, $options);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    //PDOインスタンスを返す
    return $pdo;
}

//データベースと接続して、PDOインスタンスを取得
$pdo = connect_db();
var_dump($pdo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'hello';
    ?>
</body>
</html>