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
    <title>Delete</title>
</head>

<body>
    <?php
    if (isset($_GET["product_code"])) {
        $productCode = $_GET["product_code"];

        $query = "DELETE FROM producten WHERE product_code = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$productCode]);

        echo "Product succesvol verwijderd.";
    } else {
        echo "Ongeldige productcode.";
    }
    ?>
</body>

</html>