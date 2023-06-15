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

$selectQuery = "SELECT * FROM producten where product_code = 2";
$stmt = $pdo->query($selectQuery);
$selecteren = $stmt->fetch();

if (isset($_POST["updaten"])) {

    $naam = $_POST["naam"];
    $prijs = $_POST["prijs"];
    $omschrijving = $_POST["omschrijving"];

    $stmt = "UPDATE producten SET product_naam = ?, prijs_per_product = ?, omschrijving = ? WHERE product_code = 2";

    $pdo->prepare($stmt)->execute([
        $naam,
        $prijs,
        $omschrijving
    ]);

    echo "<p style='color:green'>Product bijgewerkt!<p>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Update Product</h1>

    <form method="Post" action="">
        <label for="naam">Product Naam:</label>
        <input type="text" name="naam" id="naam" value="<?php echo $selecteren["product_naam"] ?>"><br><br>

        <label for="prijs">Prijs per stuk:</label>
        <input type="text" name="prijs" id="prijs" value="<?php echo $selecteren["prijs_per_product"] ?>"><br><br>

        <label for="omschrijving">Omschrijving:</label>
        <textarea name="omschrijving" id="omschrijving"><?php echo $selecteren["omschrijving"] ?></textarea><br><br>

        <input type="submit" name="updaten" value="Update Product">
    </form>
</body>

</html>