<?php
function calculateAverage($responses) {
    return array_sum($responses) / count($responses);
}

function surveyAnalysis($data) {
    return "Average score: " . number_format(calculateAverage($data), 2);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Survey Data Analysis</title>
</head>
<body>
    <h2>Survey Data Analysis</h2>
    <?php
    $survey = [4, 5, 3, 4, 5];
    echo surveyAnalysis($survey);
    ?>
</body>
</html>