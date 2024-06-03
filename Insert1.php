<?php

include "db.php";
 
if (isset($_POST["submit"])){
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];
 
    $sql = "INSERT INTO producten (product_naam, prijs_per_stuk, omschrijving) VALUES (?,?,?)";
    $stmt = $pdo->prepare($sql);
 
 
    if ($stmt->execute()) {
        echo "Data is inserted into producten";
    } else {
        echo "Data is not inserted into producten";
    }
}
 
?>
 print ("Hello world")
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php advanced</title>
</head>
<body>
<form action="insert.php" method="post">
    <input type="text" name="product_naam" placeholder="Product naam" required>
    <input type="text" name="prijs_per_stuk" placeholder="Prijs per stuk" required>
    <input type="text" name="omschrijving" placeholder="Omschrijving" required>    
    <input type="submit" value="sumbit">
</form>
</body>
</html>