<?php
// Sample computer parts for recommendations
$computerParts = [
    ['name' => 'Intel Core i9-12900K', 'category' => 'CPU', 'brand' => 'Intel', 'price' => 599.99],
    ['name' => 'AMD Ryzen 7 5800X3D', 'category' => 'CPU', 'brand' => 'AMD', 'price' => 449.99],
    ['name' => 'Corsair Vengeance LPX 16GB', 'category' => 'RAM', 'brand' => 'Corsair', 'price' => 79.99],
    ['name' => 'G.Skill Trident Z RGB 32GB', 'category' => 'RAM', 'brand' => 'G.Skill', 'price' => 149.99],
    ['name' => 'ASUS ROG STRIX B550-F', 'category' => 'Motherboard', 'brand' => 'ASUS', 'price' => 189.99],
    ['name' => 'MSI MPG X570 Gaming Plus', 'category' => 'Motherboard', 'brand' => 'MSI', 'price' => 169.99],
    ['name' => 'EVGA SuperNOVA 750 G5', 'category' => 'PSU', 'brand' => 'EVGA', 'price' => 119.99],
    ['name' => 'Corsair RM850x 850W', 'category' => 'PSU', 'brand' => 'Corsair', 'price' => 139.99],
    ['name' => 'NVIDIA GeForce RTX 3070', 'category' => 'GPU', 'brand' => 'NVIDIA', 'price' => 499.99],
    ['name' => 'AMD Radeon RX 6800 XT', 'category' => 'GPU', 'brand' => 'AMD', 'price' => 649.99]
];

// Get the user inputs
$productType = $_POST['productType'];
$upgradeAim = $_POST['upgradeAim'];
$budget = $_POST['budget'];

// Recommendation Logic
$recommendedParts = [];

// Filter parts based on category and budget
foreach ($computerParts as $part) {
    if ($productType == 'Computer Parts') {
        // Matching recommendation aim with categories
        if (($upgradeAim == 'Boost FPS' && $part['category'] == 'GPU') ||
            ($upgradeAim == 'Improve Responsiveness' && $part['category'] == 'CPU') ||
            ($upgradeAim == 'Increase Storage' && $part['category'] == 'RAM')) {
            if ($part['price'] <= $budget) {
                $recommendedParts[] = $part;
            }
        }
    }
}

// Limit to 3 recommendations
$recommendedParts = array_slice($recommendedParts, 0, 3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Recommended Parts</title>
</head>
<body>

<h2>Your Recommended Parts</h2>

<?php if (!empty($recommendedParts)): ?>
    <ul>
        <?php foreach ($recommendedParts as $part): ?>
            <li><?php echo "{$part['name']} ({$part['category']}) - {$part['brand']} - \${$part['price']}"; ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No parts found within your budget and requirements.</p>
<?php endif; ?>

</body>
</html>
