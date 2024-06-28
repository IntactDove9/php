<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['naam']) && isset($_POST['achternaam']) && isset($_POST['leeftijd']) && isset($_POST['adres']) && isset($_POST['email'])) {
        echo "<h2>Ingevoerde gegevens:</h2>";
        echo "Naam: " . $_POST['naam'] . "<br>";
        echo "Achternaam: " . $_POST['achternaam'] . "<br>";
        echo "Leeftijd: " . $_POST['leeftijd'] . "<br>";
        echo "Adres: " . $_POST['adres'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
    }
}
?>

<p><b>De verschil tussen POST en GET:</b></p>
<p>De POST-methode: De gegevens worden onzichtbaar verzonden, wat betekent dat ze niet in de adresbalk verschijnen. POST wordt gebruikt voor het verzenden van gevoelige gegevens zoals wachtwoorden en het verzenden van grote hoeveelheden gegevens.</p>

<html>
<head>
    <title>POST Formulier</title>
    <style>
        body {
            background-color: #f0f0f0;
        }
        form {
            background-color: #ff0000; /* Rood */
            padding: 20px;
            border-radius: 8px;
            color: white;
            width: 300px;
        }
    </style>
</head>
<body>

<h2>POST Formulier</h2>
<form method="post" action="post.php">
    Naam: <input type="text" name="naam"><br>
    Achternaam: <input type="text" name="achternaam"><br>
    Leeftijd: <input type="text" name="leeftijd"><br>
    Adres: <input type="text" name="adres"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Verzenden">
</form>


</body>
</html>
