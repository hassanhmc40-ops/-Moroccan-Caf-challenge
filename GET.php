<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Catalog</title>
</head>
<body>

<?php

$products = [
    ["name" => "banana",  "category" => "fruits"],
    ["name" => "potato",  "category" => "vegetables"],
    ["name" => "onion",   "category" => "vegetables"],
    ["name" => "mango",   "category" => "fruits"],      
    ["name" => "tomato",  "category" => "vegetables"]
];


$category = $_GET['category'] ?? '';
$sort     = $_GET['sort']     ?? 'asc';


if ($category !== '') {
    $products = array_filter(
        $products,
        fn($p) => $p['category'] === $category
    );
}


usort($products, function($a, $b) use ($sort) {
    if ($sort === 'desc') {
        return strcmp($b['name'], $a['name']); // Z → A
    }
    return strcmp($a['name'], $b['name']);     // A → Z
});
?>


<p>
    <strong>Category:</strong>
    <a href="?sort=<?= $sort ?>">All</a> |
    <a href="?category=fruits&sort=<?= $sort ?>">Fruits</a> |
    <a href="?category=vegetables&sort=<?= $sort ?>">Vegetables</a>
</p>
<p>
    <strong>Sort:</strong>
    <a href="?category=<?= $category ?>&sort=asc">ASC</a> |
    <a href="?category=<?= $category ?>&sort=desc">DESC</a>
</p>


<?php foreach ($products as $p): ?>
    <p><?= htmlspecialchars($p['name']) ?></p>
<?php endforeach; ?>

</body>
</html>