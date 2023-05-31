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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
</head>

<body>
    <?php
    // deel 1

    // $selectQuery = "SELECT * FROM producten";
    // $stmt = $pdo->query($selectQuery);
    // $selecteren = $stmt->fetchAll();
    // foreach ($selecteren as $select) {
    //     echo "product code: " . $select["product_code"] . '|||';
    //     echo "product Naam: " . $select["product_naam"] . '|||';
    //     echo "product Prijs: " . $select["prijs_per_product"] . '|||';
    //     echo "product Beschrijving: " . $select["omschrijving"] . "<br>";
    // }

    //deel 2

    // $select2 = "SELECT * FROM producten WHERE product_code = 1";
    // $stmt2 = $pdo->query($select2);
    // $selecteren2 = $stmt2->fetchAll();

    // foreach ($selecteren2 as $select1) {
    //     echo "product code: " . $select1["product_code"] . '|||';
    //     echo "product Naam: " . $select1["product_naam"] . '|||';
    //     echo "product Prijs: " . $select1["prijs_per_product"] . '|||';
    //     echo "product Beschrijving: " . $select1["omschrijving"] . "<br>";
    // }

    // deel 3
    // $select3 = "SELECT * FROM producten WHERE product_code = 3";
    // $stmt3 = $pdo->query($select2);
    // $selecteren3 = $stmt3->fetchAll();

    // foreach ($selecteren3 as $select2) {
    //     echo "product code: " . $select2["product_code"] . '|||';
    //     echo "product Naam: " . $select2["product_naam"] . '|||';
    //     echo "product Prijs: " . $select2["prijs_per_product"] . '|||';
    //     echo "product Beschrijving: " . $select2["omschrijving"] . "<br>";
    // }

    ?>


</body>


</html>