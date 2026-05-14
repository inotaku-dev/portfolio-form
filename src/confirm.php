<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name)) {
    exit('名前を入力してください');
}

if (empty($email)) {
    exit('メールアドレスを入力してください');
}

if (empty($message)) {
    exit('お問い合わせ内容を入力してください');
}

$pdo = new PDO(
    'mysql:host=mysql;dbname=contact_form;charset=utf8',
    'root',
    'root'
);

$sql = "INSERT INTO contacts (name, email, message)
VALUES (:name, :email, :message)";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':message', $message);

$stmt->execute();


header('Location: thanks.php');
exit;

