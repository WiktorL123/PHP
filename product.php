<?php

// 5. Pobierz dane produktu na podstawie identyfikatora z parametru URL
if (isset($_GET['id'])) {
    $productId = $_GET['id'];

    // Połącz się z bazą danych
    $connection = new mysqli('localhost', 'root', '', 'sklep');

    // Pobierz dane produktu
    $query = "SELECT * FROM produkty WHERE id_produktu = $productId";
    $result = $connection->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $productName = $row['nazwa'];
        $productPrice = $row['cena'];


        // 6. Wyświetl szczegóły produktu na podstronie
        //  echo "<img src='$productImage' alt='$productName'>";
        echo "<h3>$productName</h3>";
        echo "<p>Cena: $productPrice</p>";
    }

    // Zamknij połączenie z bazą danych
    $connection->close();
}

