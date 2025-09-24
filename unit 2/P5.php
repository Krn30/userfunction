<?php
function generateResume($data) {
    return sprintf(
        "Name: %s\nEmail: %s\nExperience: %s\nSkills: %s",
        $data['name'], $data['email'], $data['experience'], implode(", ", $data['skills'])
    );
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resume Generator</title>
</head>
<body>
    <h2>Resume Generator</h2>
    <?php
    $resumeData = [
        'name' => 'Chirag',
        'email' => 'chirag@example.com',
        'experience' => '1 years as Frontend Developer',
        'skills' => ['PHP', 'JavaScript', 'python']
    ];
    echo "<pre>" . generateResume($resumeData) . "</pre>";
    ?>
</body>
</html>