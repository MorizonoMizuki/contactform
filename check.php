<?php

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
<p>お名前： <?= $username;  ?></p>
<p>メールアドレス： <?= $email; ?></p>
<p>お問い合わせ内容： <?php echo $content;  ?></p>

<form action="">
    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit">確定</button>
</form>
    
</body>
</html>