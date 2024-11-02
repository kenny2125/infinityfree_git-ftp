<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PC Parts Recommendation</title>
</head>
<body>

<h2>PC Parts Recommendation Form</h2>

<form action="recommend.php" method="post">
    <!-- Step 1: Type of Product -->
    <label for="productType">Select the type of product you want to buy:</label><br>
    <select id="productType" name="productType" required>
        <option value="Computer Parts">Computer Parts</option>
        <option value="Peripherals">Peripherals</option>
        <option value="Prebuilt">Prebuilt</option>
    </select>
    <br><br>

    <!-- Step 2: Aim for Next Upgrade -->
    <label for="upgradeAim">What do you aim for in your next upgrade?</label><br>
    <select id="upgradeAim" name="upgradeAim" required>
        <option value="Boost FPS">Boost FPS</option>
        <option value="Improve Responsiveness">Improve Responsiveness</option>
        <option value="Increase Storage">Increase Storage</option>
    </select>
    <br><br>

    <!-- Step 3: Budget -->
    <label for="budget">Enter your budget (in USD):</label><br>
    <input type="number" id="budget" name="budget" min="1" required>
    <br><br>

    <button type="submit">Get Recommendation</button>
</form>

</body>
</html>
