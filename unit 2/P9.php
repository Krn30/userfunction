<?php
function dateDifference($date1, $date2) {
    $d1 = new DateTime($date1);
    $d2 = new DateTime($date2);
    $interval = $d1->diff($d2);
    return $interval->days . " days between dates";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Date Difference Calculator</title>
</head>
<body>
    <h2>Date Difference Calculator</h2>
    <form method="post">
        Date 1 (YYYY-MM-DD): <input type="text" name="date1"><br>
        Date 2 (YYYY-MM-DD): <input type="text" name="date2"><br>
        <input type="submit" name="dateDiff" value="Calculate">
    </form>
    <?php
    if (isset($_POST['dateDiff'])) {
        echo dateDifference($_POST['date1'], $_POST['date2']);
    }
    ?>
</body>
</html>