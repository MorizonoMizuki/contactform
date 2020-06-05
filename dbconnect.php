<?php

//phpmyadminと接続する
//データベースの接続情報
$host = 'localhost'; //mySQLがいるコンピューターまでのアドレス
$dbname = 'contact_form';//使用するデータベース名
$charset = 'utf8mb4';//文字コード設定
$user = 'root'; //mySQLにログインするユーザー名
$password = ''; //mySqLにログインするユーザーパスワード

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //SQLでエラーが表示された場合、画面にエラーが出力される
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //DBから取得したデータを連想配列の形式で取得する
    PDO::ATTR_EMULATE_PREPARES   => false, //SQLインジェクション対策
];

//DBへの接続用文字列制作
$dsn = "mysql:host=${host};dbname=${dbname};charset=${charset}";

//DBへの接続
try {
    //接続実行
    $dbh = new PDO($dsn,$user,$password,$options);
    echo '接続成功';
} catch (\PDOException $e) {
    //接続に失敗した場合
    var_dump($e->getMessage());
    echo 'ERROR';
}