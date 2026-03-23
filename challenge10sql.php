<?php

require 'challenge sql7.php';

$sql = "SELECT * FROM categories";

$stmt = $pdo->query($sql);

$categories = $stmt->fetchAll();

echo "<select>";

foreach ($categories as $category) {

    echo "<option value='" . $category['id'] . "'>"
         . $category['name'] .
         "</option>";

}

echo "</select>";