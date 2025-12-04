<?php
    $user = "Nico";
    $greet = " Hello";
    
    // check if user is not empty
    if($user) {
        $greet = "Hi again, $user!";
    }

    // product name
    $product = "Fresh Milk";
    $cost = 10; // changed to 10 as per instructions (originally 30)
    $totals = []; // had to initialize this then append the contents using the for loop
        
    // for loop for price table
    for ($i = 1; $i <= 15; $i++) { // originally supposed to only loop 10 times but changed to 15 as per instructions
        $subtotal = $cost * $i;
        $discount = ($cost/100) * ($i * 4);
        // use current value in counter as key, use computation as value
        $totals[$i] = $subtotal - $discount;
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- require header -->
    <?php require "includes/header.php" ?>
    <br>
    <div class="main-content">
        <p><?= $greet; ?></p>
        <h2><?= $product; ?> Discounts</h2>
        <table>
            <tr>
                <th>Cartons</th>
                <th>Price</th>
            </tr>
            <!-- foreach loop to print array contents automatically -->
            <?php foreach ($totals as $quantity => $price): ?>
                <tr>
                    <!-- ternary operator needed here -->
                    <td><?= $quantity ?> carton<?= $quantity > 1 ? "s" : "";  ?></td>
                    <td>P <?= $price ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <?php include "includes/footer.php" ?>
</body>
</html>
