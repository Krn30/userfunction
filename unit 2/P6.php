<?php
function displayCalendar() {
    return date('l, F j, Y');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Academic Calendar</title>
</head>
<body>
    <h2>Academic Calendar</h2>
    <?php
    echo displayCalendar();
    ?>
</body>
</html>