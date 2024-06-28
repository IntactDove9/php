<?php
// Database connection settings
$db_host = 'localhost';
$db_username = 'SchoolWerk';
$db_password = '123';
$db_name = 'Winkel';

// Createing a connection to the database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Checking connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Deel 1: Selecteer alle data uit je tabel
$result = $conn->query("SELECT * FROM Producten");
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product Code: ". $row["product_code"]. "<br>";
        echo "Product Naam: ". $row["product_naam"]. "<br>";
        echo "Prijs per stuk: ". $row["prijs_per_stuk"]. "<br>";
        echo "Omschrijving: ". $row["omschrijving"]. "<br><br>";
    }
} else {
    echo "0 results";
}

// Deel 2: Selecteer alleen het product die de product_code 1 heeft
$stmt = $conn->prepare("SELECT * FROM Producten WHERE product_code =?");
$stmt->bind_param("i", $product_code);
$product_code = 1;
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product Code: ". $row["product_code"]. "<br>";
        echo "Product Naam: ". $row["product_naam"]. "<br>";
        echo "Prijs per stuk: ". $row["prijs_per_stuk"]. "<br>";
        echo "Omschrijving: ". $row["omschrijving"]. "<br><br>";
    }
} else {
    echo "0 results";
}

// Deel 3: Selecteer alleen het product die de product_code 2 heeft
$stmt = $conn->prepare("SELECT * FROM Producten WHERE product_code = :product_code");
$stmt->bindParam(":product_code", $product_code);
$product_code = 2;
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Product Code: ". $row["product_code"]. "<br>";
        echo "Product Naam: ". $row["product_naam"]. "<br>";
        echo "Prijs per stuk: ". $row["prijs_per_stuk"]. "<br>";
        echo "Omschrijving: ". $row["omschrijving"]. "<br><br>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>
