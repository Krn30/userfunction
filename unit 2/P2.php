<?php
function eventCountdown($eventDate) {
    $event = strtotime($eventDate);
    $now = time();
    $days = floor(($event - $now) / (60 * 60 * 24));
    return $days >= 0 ? "$days days until the event" : "Event has passed";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Event Countdown</title>
</head>
<body>
    <h2>Event Countdown</h2>
    <form method="post">
        Event Date (YYYY-MM-DD): <input type="text" name="eventDate"><br>
        <input type="submit" name="countdown" value="Calculate">
    </form>
    <?php
    if (isset($_POST['countdown'])) {
        echo eventCountdown($_POST['eventDate']);
    }
    ?>
</body>
</html>