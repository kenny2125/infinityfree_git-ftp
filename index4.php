<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>Product List</h1>
<div class="product-container">

    <?php
    // Database connection settings
    $servername = "sql211.infinityfree.com";
$mysql_port = 3306;
$username = "if0_37581499";
$password = "1Q1D8yKlA0ZODM";
$dbname = "if0_37581499_db_test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $mysql_port);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to get products from the database
    $sql = "SELECT Name, price FROM products";
    $result = $conn->query($sql);

    // Check if we have results and display each product in a card
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="product-card">';
            echo '<h2 class="product-name">' . htmlspecialchars($row['Name']) . '</h2>';
            echo '<p class="product-price">$' . number_format($row['price'], 2) . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p>No products found.</p>";
    }

    // Close the database connection
    $conn->close();
    ?>

</div>

</body>
</html>
