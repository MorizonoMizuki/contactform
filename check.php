<?php

//このページにGET送信で来た場合、
// index.htmlに移動する 
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: index.html');
}
$_SERVER['REQUEST_METHOD'];

//別ファイルの読み込み
// require_once(読み込みたいファイルのパス);
require_once('functions.php');

// $fruits = ['apple' => 'りんご', 'orange' => 'みかん', 'banana' => 'ばなな'];
// var_dump($fruits);

// スーパーグローバル変数
// - $_POST：POST送信されたときの値が入ってくる
// - $_GET：GET送信されたときの値が入ってくる

//htmlからきてるusename
$username = $_POST['username'];
// echo $username . '<br>';

$email = $_POST['email'];
// echo $email . '<br>';

$content = $_POST['content'];
// echo $content;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>入力内容確認</h1>
<p>お名前： <?= h($username);  ?></p>
<p>メールアドレス： <?= h($email); ?></p>
<p>お問い合わせ内容： <?= h($content); ?></p>

<form action="thanks.php" method="POST">
    <input type="hidden" name="username" value="<?= h($username);  ?>">
    <input type="hidden" name="email" value="<?= h($email);  ?>">
    <input type="hidden" name="content" value="<?= h($content);  ?>">

    <button type="button" onclick="history.back()">戻る</button>

    <?php if ($username != '' && $email != '' && $content != '') { ?> <button type="submit">確定</button> <?php } ?>
</form>
    
</body>
</html>