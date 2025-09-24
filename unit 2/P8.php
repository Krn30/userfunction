<?php
function checkInventory($item, $inventory) {
    return isset($inventory[$item]) && $inventory[$item] > 0 ? "$item: {$inventory[$item]} in stock" : "$item out of stock";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Inventory Checker</title>
</head>
<body>
    <h2>Inventory Checker</h2>
    <?php
    $inventory = ['laptop' => 10, 'phone' => 0, 'tablet' => 5];
    echo checkInventory('laptop', $inventory);
    echo checkInventory('phone', $inventory);
    echo checkInventory('tablet', $inventory);
    ?>
</body>
</html>