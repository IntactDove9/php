<?php
// Database connection settings
$db_host = 'localhost';
$db_username = 'ShoolWerk';
$db_password = '123';
$db_name = 'Winkel';

// Createing a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// A Form to update the product information
if (isset($_POST['submit'])) {
    $product_code = $_POST['product_code'];
    $product_naam = $_POST['product_naam'];
    $prijs_per_stuk = $_POST['prijs_per_stuk'];
    $omschrijving = $_POST['omschrijving'];

    // Prepareing an update statement
    $stmt = $conn->prepare("UPDATE Producten SET product_naam =?, prijs_per_stuk =?, omschrijving =? WHERE product_code =?");
    $stmt->bind_param("sssi", $product_naam, $prijs_per_stuk, $omschrijving, $product_code);
    $stmt->execute();

    echo "The product information was updated successfully!";
} else {
    // Displays the form
   ?>
    <form action="update.php" method="post">
        <label for="product_code">De Product Code:</label>
        <input type="number" id="product_code" name="product_code" required><br><br>
        <label for="product_naam">De product Naam:</label>
        <input type="text" id="product_naam" name="product_naam" required><br><br>
        <label for="prijs_per_stuk">De prijs per stuk:</label>
        <input type="number" id="prijs_per_stuk" name="prijs_per_stuk" required><br><br>
        <label for="omschrijving">Omschrijving:</label>
        <textarea id="omschrijving" name="omschrijving" required></textarea><br><br>
        <input type="submit" name="submit" value="Update Product">
    </form>
    <?php
}

// Closeing the connection
$conn->close();
?>
