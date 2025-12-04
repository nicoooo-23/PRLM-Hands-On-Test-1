<?php
    // vars
    $user = "Nico";
    $pagbati = " Hello, " . $user;
    // array
    $offer = ["Fresh Milk", 5, 30, 25];
    // with operators
    $reg_price = $offer[1] * $offer[2];
    $offer_price = $offer[1] * $offer[3];
    $saving = $reg_price - $offer_price;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- include header for nav -->
    <?php include "includes/header.php" ?>
    <br>
    <div class="main-content">
        <h2>Multi-Buy Offer</h2>
        <!-- greet user w/ shorthand echo -->
        <p><?= $pagbati; ?></p>
        <div class="saving">Save P <?= $saving; ?></div>
        <p>Buy 5 cartons of Fresh Milk for P <?= $offer_price; ?></p>
        <p>(usual price P <?= $reg_price; ?>)</p>
    </div>

    <?php include "includes/footer.php" ?>
</body>
</html>
