<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['naam']) && isset($_GET['achternaam']) && isset($_GET['leeftijd']) && isset($_GET['adres']) && isset($_GET['email'])) {
        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "Naam: " . $_GET['naam'] . "<br>";
        echo "Achternaam: " . $_GET['achternaam'] . "<br>";
        echo "Leeftijd: " . $_GET['leeftijd'] . "<br>";
        echo "Adres: " . $_GET['adres'] . "<br>";
        echo "Email: " . $_GET['email'] . "<br>";
    }
}
?>

<p><b>Het verschil tussen POST en GET:</b></p>
<p>De GET-methode: De gegevens worden als onderdeel van de URL verzonden, wat betekent dat ze zichtbaar zijn in de adresbalk. GET wordt gebruikt voor het ophalen van gegevens van de server.</p>

<html>
<head>
    <title>GET Formulier</title>
    <style>
        body {
            background-color: aliceblue;
        }
        form {
            background-color: #800080; /* Paars */
            padding: 20px;
            border-radius: 8px;
            color: white;
            width: 300px;
        }
    </style>
</head>
<body>

<h2>GET Formulier</h2>
<form method="get" action="get.php">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="text" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Verzenden">
</form>
</body>
</html>

