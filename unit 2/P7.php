<?php
$gradeWeight = ['assignments' => 0.4, 'exams' => 0.6];

function calculateGrade($assignments, $exams) {
    global $gradeWeight;
    return ($assignments * $gradeWeight['assignments']) + ($exams * $gradeWeight['exams']);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h2>Grade Calculator</h2>
    <?php
    echo "Final Grade: " . calculateGrade(85, 90);
    ?>
</body>
</html>