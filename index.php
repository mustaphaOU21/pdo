<?php
$host = 'localhost';
$db   = 'winkle';
$user = 'root';
$pass = 'QweMus?!123!';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
</head>

<body>
    <?php

    $selectQuery = "SELECT * FROM producten";
    $stmt = $pdo->query($selectQuery);
    $selecteren = $stmt->fetchAll();
    echo "<table>";
    echo "<tr><th>Product code</th><th>Product Naam</th><th>Product Prijs</th><th>Product Beschrijving</th></tr>";

    foreach ($selecteren as $select) {
        echo "<tr>";
        echo "<td>" . $select["product_code"] . "</td>";
        echo "<td>" . $select["product_naam"] . "</td>";
        echo "<td>" . $select["prijs_per_product"] . "</td>";
        echo "<td>" . $select["omschrijving"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>

    <a href="delete.php?product_code=3">Delet nummer 3</a>
</body>

</html>