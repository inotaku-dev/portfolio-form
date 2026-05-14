<?php

$id = $_GET['id'];

$pdo = new PDO(
    'mysql:host=mysql;dbname=contact_form;charset=utf8',
    'root',
    'root'
);

$sql = "SELECT * FROM contacts WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $id);

$stmt->execute();

$contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>編集</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>編集画面</h1>

<form action="update.php" method="POST">

    <input type="hidden" name="id" value="<?= $contact['id'] ?>">

    <p>名前</p>
    <input type="text" name="name" value="<?= $contact['name'] ?>">

    <p>メール</p>
    <input type="email" name="email" value="<?= $contact['email'] ?>">

    <p>お問い合わせ内容</p>
    <textarea name="message"><?= $contact['message'] ?></textarea>

    <br><br>

    <button type="submit">更新</button>

</form>

</body>
</html>
