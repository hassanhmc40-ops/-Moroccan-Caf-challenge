<?php

require 'challenge8sql.php';

$title = "PHP Basics";
$author = "Hassan";
$price = 120;

$sql = "INSERT INTO library_books (title, author, price)
        VALUES (:title, :author, :price)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'title' => $title,
    'author' => $author,
    'price' => $price
]);

$id = $pdo->lastInsertId();

echo "Success! Book added with ID: " . $id;