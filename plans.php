<?php
$FreePlanCost = 'free';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piani</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <h1>Piani</h1>
    <p>
        Free Plan
        This plan offers basic features and is available at no cost.
        Cost: <?php echo htmlspecialchars($FreePlanCost); ?>
    </p>
</body>
</html>