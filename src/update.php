<?php

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$pdo = new PDO(
    'mysql:host=mysql;dbname=contact_form;charset=utf8',
    'root',
    'root'
);

$sql = "UPDATE contacts
SET
    name = :name,
    email = :email,
    message = :message
WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $id);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':message', $message);

$stmt->execute();

header('Location: list.php');
exit;
