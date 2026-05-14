<?php

$id = $_GET['id'];

$pdo = new PDO(
    'mysql:host=mysql;dbname=contact_form;charset=utf8',
    'root',
    'root'
);

$sql = "DELETE FROM contacts WHERE id = :id";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':id', $id);

$stmt->execute();

header('Location: list.php');
exit;
