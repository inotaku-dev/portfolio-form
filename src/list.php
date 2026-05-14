<?php

$pdo = new PDO(
    'mysql:host=mysql;dbname=contact_form;charset=utf8',
    'root',
    'root'
);

$sql = "SELECT * FROM contacts ORDER BY created_at DESC";

$stmt = $pdo->query($sql);

$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせ一覧</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>お問い合わせ一覧</h1>

<table border="1">

    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>メール</th>
        <th>内容</th>
	<th>送信日時</th>
	<th>削除</th>
        <th>編集</th>
    </tr>

    <?php foreach ($contacts as $contact): ?>

    <tr>
        <td><?= $contact['id'] ?></td>
        <td><?= $contact['name'] ?></td>
        <td><?= $contact['email'] ?></td>
        <td><?= $contact['message'] ?></td>
	<td><?= $contact['created_at'] ?></td>
        <td>
            <a href="delete.php?id=<?= $contact['id'] ?>">
                削除
            </a>
	</td>
        <td>
            <a href="edit.php?id=<?= $contact['id'] ?>">
                編集
            </a>
        </td>
    </tr>

    <?php endforeach; ?>

</table>

</body>
</html>
