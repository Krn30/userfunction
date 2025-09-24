<?php
function executePlugin($pluginName, $data) {
    return function_exists($pluginName) ? call_user_func($pluginName, $data) : "Plugin not found";
}

function samplePlugin($data) {
    return "Processed: $data";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Plugin System</title>
</head>
<body>
    <h2>Plugin System</h2>
    <?php
    echo executePlugin('samplePlugin', 'Test Data');
    ?>
</body>
</html>