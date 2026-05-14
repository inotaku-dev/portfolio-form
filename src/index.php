<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>お問い合わせフォーム</h1>

<form action="confirm.php" method="POST">

    <p>名前</p>
    <input type="text" name="name">

    <p>メール</p>
    <input type="email" name="email">

    <p>お問い合わせ内容</p>
    <textarea name="message"></textarea>

    <br><br>

    <button type="submit">送信</button>

</form>

</body>
</html>
